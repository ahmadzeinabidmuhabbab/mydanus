<?php
namespace App\Controllers;

use App\Models\SellerModel;
use App\Models\UserModel;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class Prelogin extends BaseController
{
    public function Register()
    {
        $userModel = new UserModel();
        $mail = $this->request->getVar('email');
        $domain = explode('@', $mail);
        //validasi email STIS
        if ($domain[1] == 'stis.ac.id') {
            //validasi inputan data
            if (!$this->validate([
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama harus diisi',
                    ],
                ],
                'kelas' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kelas harus diisi',
                    ],
                ],
                'email' => [
                    'rules' => 'required|valid_email|is_unique[users.email]',
                    'errors' => [
                        'required' => 'Email harus diisi',
                        'valid_email' => 'Format email tidak valid',
                        'is_unique' => 'Email sudah terdaftar',
                    ],
                ],
                'phone' => [
                    'rules' => 'required|numeric',
                    'errors' => [
                        'required' => 'No. HP harus diisi',
                        'numeric' => 'No. HP harus berupa angka',
                    ],
                ],
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alamat harus diisi',
                    ],
                ],
                'password' => [
                    'rules' => 'required|min_length[8]',
                    'errors' => [
                        'required' => 'Password harus diisi',
                        'min_length' => 'Password minimal 8 karakter',
                    ],
                ],
                'confirmpassword' => [
                    'rules' => 'required|matches[password]',
                    'errors' => [
                        'required' => 'Konfirmasi password harus diisi',
                        'matches' => 'Konfirmasi password tidak sesuai',
                    ],
                ],
            ])) {
                $validation = \Config\Services::validation();
                return redirect()->to(base_url('/registration'))->withInput()->with('validation', $validation);
            }
            $hash = md5(rand(0, 1000));
            $data = [
                'nama' => $this->request->getVar('nama'),
                'kelas' => $this->request->getVar('kelas'),
                'email' => $this->request->getVar('email'),
                'phone' => $this->request->getVar('phone'),
                'alamat' => $this->request->getVar('alamat'),
                'password' => $this->request->getVar('password'),
                'nim' => $domain[0],
                'hash' => $hash,
            ];
            session()->set('data', $data);
            //save to database
            $userModel->save([
                'nama' => $data['nama'],
                'kelas' => $data['kelas'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'alamat' => $data['alamat'],
                'password' => md5($data['password']),
                'hash' => $hash,
                'status' => 'unactive',
                'nim' => $data['nim'],
            ]);
            return redirect()->to(base_url('prelogin/verify'));
        } else {
            session()->setFlashdata('pesan', 'Email harus menggunakan email STIS. Gagal melakukan pendaftaran');
            session()->setFlashdata('flag', 'danger');
            return redirect()->to(base_url('/registration'));
        }
    }

    public function verify()
    {
        //konfigurasi email
        $mail = new PHPMailer(true);

        //konfigurasi pesan email
        $data = session()->get('data');
        $to = $data['email'];
        $subject = "Verifikasi Akun";
        $message = '
        <p>Thanks for signing up!</p>
        <p>Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.</p>
        <p>-----------------------------------</p>
        <p>Username: ' . $data['nim'] . '</p>
        <p>Password: ' . $data['password'] . '</p>
        <p>----------------------------------- </p>
        <p>Please click this link to activate your account:
        ' . base_url('prelogin/activate?email=' . $data['email'] . '&hash=' . $data['hash']) . '</p>';

        //konfigurasi server
        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
            $mail->isSMTP(); // Send using SMTP
            $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true; // Enable SMTP authentication
            $mail->Username = 'mydanusstis@gmail.com';
            $mail->Password = 'ctpdiqtlkegwyedg';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('mydanusstis@gmail.com', 'Marketplace STIS');
            $mail->addAddress($to);

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;
            $mail->send();
            session()->setFlashdata('pesan', 'Pendaftaran berhasil, silahkan cek email untuk melakukan verifikasi');
            session()->setFlashdata('flag', 'success');
            return redirect()->to(base_url('/'));
        } catch (Exception $e) {
            session()->setFlashdata('pesan', 'Gagal melakukan pengiriman email verifikasi');
            session()->setFlashdata('flag', 'danger');
            return redirect()->to(base_url('/'));
        }
    }

    public function activate()
    {
        $email = $_GET['email'];
        $hash = $_GET['hash'];
        $userModel = new UserModel();
        $user = $userModel->where(['email' => $email, 'hash' => $hash])->first();
        if ($user) {
            $userModel->set('status', 'active')->where('id_user', $user['id_user'])->update();
            session()->setFlashdata('pesan', 'Akun berhasil diaktivasi, silakan login');
            session()->setFlashdata('flag', 'success');
            return redirect()->to(base_url('/'));
        } else {
            session()->setFlashdata('pesan', 'Akun gagal diaktivasi');
            session()->setFlashdata('flag', 'danger');
            return redirect()->to(base_url('/'));
        }
    }

    public function login()
    {
        $role = $this->request->getVar('role');
        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));

        if ($role == 'pembeli') {
            $userModel = new UserModel();
            $user = $userModel->where(['nim' => $username, 'password' => $password])->first();
            if ($user) {
                if ($user['status'] == 'active') {
                    session()->set($user);
                    session()->set('login', "true");
                    session()->set('passwordReal',$this->request->getVar('password'));
                    session()->setFlashdata('pesan', 'Selamat datang ' . $user['nama']);
                    session()->setFlashdata('flag', 'success');
                    return redirect()->to(base_url('/home'));
                } else {
                    session()->setFlashdata('pesan', 'Akun belum diaktivasi. Silakan cek email anda dan aktivasi akun');
                    session()->setFlashdata('flag', 'danger');
                    return redirect()->to(base_url('/'));
                }
            } else {
                session()->setFlashdata('pesan', 'Username atau password salah');
                session()->setFlashdata('flag', 'danger');
                return redirect()->to(base_url('/'));
            }
        } else if ($role == 'penjual') {
            $sellerModel = new SellerModel();
            $seller = $sellerModel->where(['username' => $username, 'password' => $password, 'role' => 'penjual'])->first();
            if ($seller) {
                session()->set('seller', $seller);
                session()->set('login', "true");
                session()->setFlashdata('pesan', 'Selamat datang ' . $seller['nama']);
                session()->setFlashdata('flag', 'success');
                return redirect()->to(base_url('/penjual'));
            } else {
                session()->setFlashdata('pesan', 'Username atau password salah');
                session()->setFlashdata('flag', 'danger');
                return redirect()->to(base_url('/'));
            }
        } else if ($role == "pengawas") {
            $adminModel = new SellerModel();
            $admin = $adminModel->where(['username' => $username, 'password' => $password, 'role' => 'pengawas'])->first();
            if ($admin) {
                session()->set('admin', $admin);
                session()->set('login', "true");
                session()->setFlashdata('pesan', 'Selamat datang ' . $admin['nama']);
                session()->setFlashdata('flag', 'success');
                return redirect()->to(base_url('/admin'));
            } else {
                session()->setFlashdata('pesan', 'Username atau password salah');
                session()->setFlashdata('flag', 'danger');
                return redirect()->to(base_url('/'));
            }
        }

    }

    public function logout()
    {
       session()->destroy();
       return redirect()->to(base_url('/'));
    }
}