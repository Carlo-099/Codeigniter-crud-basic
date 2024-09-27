<?php 
namespace App\Controllers;
use App\Models\CrudModel;
use CodeIgniter\Controller;


class CrudController extends Controller
{
    // show names list in crud codeigniter project
    public function index(){
        $CrudModel = new CrudModel();
        $data['users'] = $CrudModel->orderBy('id', 'DESC')->findAll();
        return view('listname', $data);
    }


    // add name form crud codeigniter project
    public function create(){
        return view('insertname');
    }
 
    // add data crud codeigniter project
    public function store() {
        $CrudModel = new CrudModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $CrudModel->insert($data);
        return $this->response->redirect(site_url('/listname'));
    }


    // show single name crud codeigniter project
    public function singleUser($id = null){
        $CrudModel = new CrudModel();
        $data['user_obj'] = $CrudModel->where('id', $id)->first();
        return view('editname', $data);
    }


    // update name data crud codeigniter project
    public function update(){
        $CrudModel = new CrudModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $CrudModel->update($id, $data);
        return $this->response->redirect(site_url('/listname'));
    }
 
    // delete name crud codeigniter project
    public function delete($id = null){
        $CrudModel = new CrudModel();
        $data['user'] = $CrudModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/listname'));
    }    
}