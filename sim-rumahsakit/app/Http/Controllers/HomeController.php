<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function Getuser()
    {
        $client = new Client();
        $request = $client->get('http://localhost/rest-server-rs/api/user');
        $response = $request->getBody();

        $user = json_decode($response, true);
        return view('user.user', ['user' => $user]);
    }

    public function detailUser($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/rest-server-rs/api/user?id=' . $id);
        $response = $request->getBody();
        $user['user'] = json_decode($response, true);

        return view('user.detailuser', ['user' => $user]);
    }

    public function tambahuser()
    {
        return view('user.tambahuser');
    }

    public function simpanuser(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/rest-server-rs/api/user', [
            'form_params' => [
                'nama' => $request->nama,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'level' => $request->level,
                'status' => $request->status
            ]
        ]);
        return view('user.simpanuser', ['data' => $request]);
    }

    public function edituser($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/rest-server-rs/api/user?id=' . $id);
        $response = $request->getBody();
        $user = json_decode($response, true);

        return view('user.edituser', ['user' => $user]);
    }

    public function Updateuser(Request $request)
    {
        $client = new Client();
        $client->request('PUT', 'http://localhost/rest-server-rs/api/user', [
            'form_params' => [
                'id_user' => $request->id_user,
                'nama' => $request->nama,
                'username' => $request->username,
                'email' => $request->email,
                'password' => $request->password,
                'level' => $request->level,
                'status' => $request->status
            ]
        ]);
        return redirect('/home/detailUser/' . $request->id_user)->with(['success' => 'Data User Berhasil Diedit']);
    }

    public function deleteuser($id)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/rest-server-rs/api/user', [
            'form_params' => [
                'id_user' => $id
            ]
        ]);

        return redirect('/home/user')->with(['error' => 'Data user Berhasil Dihapus']);
    }

    public function userGetdokter()
    {
        $client = new Client();
        $request = $client->get('http://localhost/rest-server-rs/api/dokter');
        $response = $request->getBody();

        $dokter = json_decode($response, true);
        return view('user.dokter', ['dokter' => $dokter]);
    }

    public function detailDokter($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/rest-server-rs/api/Dokter?id=' . $id);
        $response = $request->getBody();
        $dokter['dokter'] = json_decode($response, true);

        return view('user.detaildokteruser', ['dokter' => $dokter]);
    }

    public function tambahdokter()
    {
        return view('user.tambahdokter');
    }

    public function simpandokter(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/rest-server-rs/api/dokter', [
            'form_params' => [
                'nama_dok' => $request->nama_dok,
                'alamat_dok' => $request->alamat_dok,
                'no_telp_dok' => $request->no_telp_dok,
                'spesialis_dok' => $request->spesialis_dok
            ]
        ]);
        return view('user.simpandokter', ['data' => $request]);
    }

    public function userEditdokter($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/rest-server-rs/api/dokter?id=' . $id);
        $response = $request->getBody();
        $dokter = json_decode($response, true);

        return view('user.editdokter', ['dokter' => $dokter]);
    }

    public function userUpdatedokter(Request $request)
    {
        $client = new Client();
        $client->request('PUT', 'http://localhost/rest-server-rs/api/dokter', [
            'form_params' => [
                'id_dok' => $request->id_dok,
                'nama_dok' => $request->nama_dok,
                'alamat_dok' => $request->alamat_dok,
                'no_telp_dok' => $request->no_telp_dok,
                'spesialis_dok' => $request->spesialis_dok
            ]
        ]);
        return redirect('/home/userDetaildokter/' . $request->id_dok)->with(['success' => 'Data dokter Berhasil Diedit']);
    }

    public function userDeletedokter($id)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/rest-server-rs/api/dokter', [
            'form_params' => [
                'id_dok' => $id
            ]
        ]);

        return redirect('/home/dokter')->with(['error' => 'Data dokter Berhasil Dihapus']);
    }

    public function userGetobat()
    {
        $client = new Client();
        $request = $client->get('http://localhost/rest-server-rs/api/obat');
        $response = $request->getBody();

        $obat = json_decode($response, true);
        return view('user.obatuser', ['obat' => $obat]);
    }

    public function detailobat($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/rest-server-rs/api/obat?id=' . $id);
        $response = $request->getBody();
        $obat['obat'] = json_decode($response, true);

        return view('user.detailobatuser', ['obat' => $obat]);
    }

    public function tambahobat()
    {
        return view('user.tambahobat');
    }

    public function simpanobat(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/rest-server-rs/api/obat', [
            'form_params' => [
                'nama_obat' => $request->nama_obat,
                'jenis_obat' => $request->jenis_obat,
                'stok_obat' => $request->stok_obat
            ]
        ]);
        return view('user.simpanobat', ['data' => $request]);
    }

    public function userEditobat($id)
    {
        $client = new Client();
        $request = $client->get('http://localhost/rest-server-rs/api/obat?id=' . $id);
        $response = $request->getBody();
        $obat = json_decode($response, true);

        return view('user.editobat', ['obat' => $obat]);
    }

    public function userUpdateobat(Request $request)
    {
        $client = new Client();
        $client->request('PUT', 'http://localhost/rest-server-rs/api/obat', [
            'form_params' => [
                'id_obat' => $request->id_obat,
                'nama_obat' => $request->nama_obat,
                'jenis_obat' => $request->jenis_obat,
                'stok_obat' => $request->stok_obat
            ]
        ]);
        return redirect('/home/userDetailobat/' . $request->id_obat)->with(['success' => 'Data obat Berhasil Diedit']);
    }

    public function userDeleteobat($id)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/rest-server-rs/api/obat', [
            'form_params' => [
                'id_obat' => $id
            ]
        ]);

        return redirect('/home/obatuser')->with(['error' => 'Data Berhasil Dihapus']);
    }

    public function Getperiksa()
    {
        $client = new Client();
        $request = $client->get('http://localhost/rest-server-rs/api/periksa');
        $response = $request->getBody();

        $periksa = json_decode($response, true);
        return view('user.periksa', ['periksa' => $periksa]);
    }

    public function detailperiksa($id)
    {
        $client = new Client();
        $request1 = $client->get('http://localhost/rest-server-rs/api/periksa?id=' . $id);
        $response1 = $request1->getBody();
        $request2 = $client->get('http://localhost/rest-server-rs/api/user');
        $response2 = $request2->getBody();
        $request3 = $client->get('http://localhost/rest-server-rs/api/dokter');
        $response3 = $request3->getBody();

        $periksa = json_decode($response1, true);
        $user = json_decode($response2, true);
        $dokter = json_decode($response3, true);

        return view('user.detailperiksa', ['periksa' => $periksa, 'user' => $user, 'dokter' => $dokter]);
    }

    public function tambahperiksa()
    {
        $client = new Client();
        $request1 = $client->get('http://localhost/rest-server-rs/api/user');
        $response1 = $request1->getBody();
        $request2 = $client->get('http://localhost/rest-server-rs/api/dokter');
        $response2 = $request2->getBody();

        $user = json_decode($response1, true);
        $dokter = json_decode($response2, true);

        return view('user.tambahperiksa', ['user' => $user], ['dokter' => $dokter]);
    }

    public function simpanperiksa(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/rest-server-rs/api/periksa', [
            'form_params' => [
                'id_user' => $request->id_user,
                'keluhan' => $request->keluhan,
                'id_dok' => $request->id_dok,
                'tglperiksa' => $request->tglperiksa
            ]
        ]);
        return redirect('/home/periksa')->with(['success' => 'Data Pasien Berhasil Ditambahkan']);
    }

    public function editperiksa($id)
    {
        $client = new Client();
        $request1 = $client->get('http://localhost/rest-server-rs/api/periksa?id=' . $id);
        $response1 = $request1->getBody();
        $request2 = $client->get('http://localhost/rest-server-rs/api/user');
        $response2 = $request2->getBody();
        $request3 = $client->get('http://localhost/rest-server-rs/api/dokter');
        $response3 = $request3->getBody();

        $periksa = json_decode($response1, true);
        $user = json_decode($response2, true);
        $dokter = json_decode($response3, true);

        return view('user.editperiksa', ['periksa' => $periksa, 'user' => $user, 'dokter' => $dokter]);
    }

    public function Updateperiksa(Request $request)
    {
        $client = new Client();
        $client->request('PUT', 'http://localhost/rest-server-rs/api/periksa', [
            'form_params' => [
                'id_periksa' => $request->id_periksa,
                'id_user' => $request->id_user,
                'keluhan' => $request->keluhan,
                'id_dok' => $request->id_dok,
                'tglperiksa' => $request->tglperiksa
            ]
        ]);
        return redirect('/home/periksa/')->with(['success' => 'Data pasien Berhasil Diedit']);
    }

    public function deleteperiksa($id)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/rest-server-rs/api/periksa', [
            'form_params' => [
                'id_periksa' => $id
            ]
        ]);

        return redirect('/home/periksa')->with(['error' => 'Data Berhasil Dihapus']);
    }

    public function Gettransaksi()
    {
        $client = new Client();
        $request = $client->get('http://localhost/rest-server-rs/api/transaksi');
        $response = $request->getBody();

        $transaksi = json_decode($response, true);
        return view('user.transaksi', ['transaksi' => $transaksi]);
    }

    public function tambahtransaksi()
    {
        $client = new Client();
        $request1 = $client->get('http://localhost/rest-server-rs/api/user');
        $response1 = $request1->getBody();
        $request2 = $client->get('http://localhost/rest-server-rs/api/periksa');
        $response2 = $request2->getBody();
        $request3 = $client->get('http://localhost/rest-server-rs/api/dokter');
        $response3 = $request3->getBody();
        $request4 = $client->get('http://localhost/rest-server-rs/api/obat');
        $response4 = $request4->getBody();

        $user = json_decode($response1, true);
        $periksa = json_decode($response2, true);
        $dokter = json_decode($response3, true);
        $obat = json_decode($response4, true);;

        return view('user.tambahtransaksi', ['user' => $user, 'periksa' => $periksa, 'dokter' => $dokter, 'obat' => $obat]);
    }

    public function simpantransaksi(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $client->request('POST', 'http://localhost/rest-server-rs/api/transaksi', [
            'form_params' => [
                'id_user' => $request->id_user,
                'biaya' => $request->biaya,
                'id_periksa' => $request->id_periksa,
                'id_dok' => $request->id_dok,
                'id_obat' => $request->id_obat,
                'tgl_transaksi' => $request->tgl_transaksi
            ]
        ]);
        return redirect('/home/transaksi')->with(['success' => 'Data Transaksi Berhasil Ditambahkan']);
    }

    public function edittransaksi($id)
    {
        $client = new Client();
        $request1 = $client->get('http://localhost/rest-server-rs/api/transaksi?id=' . $id);
        $response1 = $request1->getBody();
        $request2 = $client->get('http://localhost/rest-server-rs/api/user');
        $response2 = $request2->getBody();
        $request3 = $client->get('http://localhost/rest-server-rs/api/periksa');
        $response3 = $request3->getBody();
        $request4 = $client->get('http://localhost/rest-server-rs/api/dokter');
        $response4 = $request4->getBody();
        $request5 = $client->get('http://localhost/rest-server-rs/api/obat');
        $response5 = $request5->getBody();

        $transaksi = json_decode($response1, true);
        $user = json_decode($response2, true);
        $periksa = json_decode($response3, true);
        $dokter = json_decode($response4, true);
        $obat = json_decode($response5, true);

        return view('user.edittransaksi', ['transaksi' => $transaksi, 'user' => $user, 'periksa' => $periksa, 'dokter' => $dokter, 'obat' => $obat]);
    }

    public function deletetransaksi($id)
    {
        $client = new \GuzzleHttp\Client();
        $client->delete('http://localhost/rest-server-rs/api/transaksi', [
            'form_params' => [
                'id_transaksi' => $id
            ]
        ]);

        return redirect('/home/transaksi')->with(['error' => 'Data Berhasil Dihapus']);
    }

    public function Updatetransaksi(Request $request)
    {
        $client = new Client();
        $client->request('PUT', 'http://localhost/rest-server-rs/api/transaksi', [
            'form_params' => [
                'id_transaksi' => $request->id_transaksi,
                'id_user' => $request->id_user,
                'id_periksa' => $request->id_periksa,
                'id_dok' => $request->id_dok,
                'id_obat' => $request->id_obat,
                'biaya' => $request->biaya,
                'tgl_transaksi' => $request->tgl_transaksi
            ]
        ]);
        return redirect('/home/detailtransaksi/' . $request->id_transaksi)->with(['success' => 'Data transaksi Berhasil Diedit']);
    }
}
