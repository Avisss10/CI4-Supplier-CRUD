<?php namespace App\Controllers;

use App\Models\SupplierModel;

class Supplier extends BaseController
{
    public function index()
    {
        $model = new SupplierModel();
        $data['supplier'] = $model->findAll();
        return view('supplier/index', $data);
    }

    public function create()
    {
        return view('supplier/create');
    }

    public function store()
    {
        $model = new SupplierModel();
        $model->insert($this->request->getPost());
        return redirect()->to('/supplier');
    }

    public function edit($id)
    {
        $model = new SupplierModel();
        $data['supplier'] = $model->find($id);
        return view('supplier/edit', $data);
    }

    public function update($id)
    {
        $model = new SupplierModel();
        $model->update($id, $this->request->getPost());
        return redirect()->to('/supplier');
    }

    public function delete($id)
    {
        $model = new SupplierModel();
        $model->delete($id);
        return redirect()->to('/supplier');
    }
}
