<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('penduduk_m', 'penduduk');
        $this->load->model('organisasi_m', 'organisasi');
        $this->load->model('pekerjaan_m', 'pekerjaan');
        $this->load->model('pendidikan_m', 'pendidikan');
        $this->load->library('form_validation');
    }

    /**
     * Get All Data Penduduk
     *
     * @param null $page
     */
    public function index($page = NULL)
    {
        if(!$page){
            $this->go('penduduk/page/1');
        }
        // Get Filter and Order By from Session
        $filter = $this->session->userdata('fp');
        $order_by = $this->session->userdata('obp');
        $order_type = $this->session->userdata('otp');
        // Setting up Pagination
        $this->load->library('pagination');
        $total_data = $this->penduduk->where($filter, 'like', '%')->count_rows();
        $data['pagination'] = $this->penduduk->all_pages;
        // Get Data Penduduk by filter if it's exist
        $data['penduduk'] = $this->penduduk->order_by($order_by, $order_type)->where($filter, 'like', '%')->paginate(10, $total_data, $page);

        $data['pekerjaan'] = $this->pekerjaan->get_all();
        $data['order_by'] = $order_by;
        $data['order_type'] = $order_type === 'asc' ? 'desc' : 'asc';
        $this->render('kependudukan/kependudukan', $data);
    }

    /**
     * Use to make URI looks good
     *
     * @param int $page
     */
    public function page($page = 1)
    {
        $this->index($page);
    }

    /**
     * Order the data
     *
     * @param $order_by
     * @param string $order_type
     */
    public function urut($order_by, $order_type = 'asc')
    {
        $this->session->unset_userdata(array('obp', 'otp'));
        $this->session->set_userdata('obp', $order_by);
        $this->session->set_userdata('otp', $order_type);
        $this->go('penduduk');
    }

    /**
     * Call when user want to search specific data
     * Store filter in Session
     */
    public function search()
    {
        $this->session->unset_userdata('fp');
        $this->session->set_userdata('fp', $this->input->post());
        $this->go('penduduk');
    }

    /**
     * Reset any filter made while user search specific data
     */
    public function refresh()
    {
        $this->session->unset_userdata(array('fp', 'obp', 'otp'));
        $this->go('penduduk');
    }

    /**
     * View for Add New Penduduk
     */
    public function tambah()
    {
        $current_id_org = $this->ion_auth->get_current_id_org();
        $data['kelurahan'] = $this->organisasi->get(array('id' => $current_id_org))->nama;
        $data['pekerjaan'] = $this->pekerjaan->get_all();
        $this->render('kependudukan/create', $data);
    }

    /**
     * Store Newly Penduduk to Database
     */
    public function simpan()
    {
        $this->input->post(NULL, TRUE);
        if ( ! $this->penduduk->from_form(NULL, array('id_organisasi' => $this->ion_auth->get_current_id_org()))->insert())
        {
            $current_id_org = $this->ion_auth->get_current_id_org();
            $data['kelurahan'] = $this->organisasi->get(array('id' => $current_id_org))->nama;
            $data['pekerjaan'] = $this->pekerjaan->get_all();
            $this->render('kependudukan/create', $data);
        }
        $this->message('Data Penduduk Berhasil Ditambahkan', 'success');
        $this->go('penduduk');
    }

    /**
     * Show Specific Detail of Data Penduduk
     *
     * @param null $nik
     */
    public function detail($nik = NULL)
    {
        $current_id_org = $this->ion_auth->get_current_id_org();
        $data['kelurahan'] = $this->organisasi->get(array('id' => $current_id_org))->nama;
        $data['pekerjaan'] = $this->pekerjaan->get_all();
        $data['penduduk'] = $this->penduduk->get(array('nik' => $nik));
        $this->render('kependudukan/detail', $data);
    }

    /**
     * Update data at specific Penduduk
     *
     * @param null $nik
     */
    public function ubah($nik = NULL)
    {
        $data = $this->input->post(NULL, TRUE);
        if ( ! $this->penduduk->from_form()->update($data, $nik))
        {
            $current_id_org = $this->ion_auth->get_current_id_org();
            $data['kelurahan'] = $this->organisasi->get(array('id' => $current_id_org))->nama;
            $data['pekerjaan'] = $this->pekerjaan->get_all();
            // TODO View untuk Tanggal Lahir belum benar
            $data['penduduk'] = $this->penduduk->get(array('nik' => $nik));
        }
        $this->message('Data Penduduk Berhasil Diubah', 'success');
        $this->go('penduduk');
    }

    /**
     * Soft Delete Penduduk
     *
     * @param null $nik
     */
    public function hapus($nik = NULL)
    {
        if($this->penduduk->delete($nik)){
            $this->message('Data Penduduk Berhasil Diubah', 'success');
        } else {
            $this->message('Data Penduduk Gagal Diubah', 'danger');
        }
        $this->go('penduduk');
    }
}
