<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Admin Controller
 *
 * @property \App\Model\Table\AdminTable $Admin
 */
class AdminController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('admin', $this->paginate($this->Admin));
        $this->set('_serialize', ['admin']);
    }

    /**
     * View method
     *
     * @param string|null $id Admin id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $admin = $this->Admin->get($id, [
            'contain' => []
        ]);
        $this->set('admin', $admin);
        $this->set('_serialize', ['admin']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $admin = $this->Admin->newEntity();
        if ($this->request->is('post')) {
            $admin = $this->Admin->patchEntity($admin, $this->request->data);
            if ($this->Admin->save($admin)) {
                $this->Flash->success('The admin has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The admin could not be saved. Please, try again.');
            }
        }
        $this->set(compact('admin'));
        $this->set('_serialize', ['admin']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $admin = $this->Admin->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $admin = $this->Admin->patchEntity($admin, $this->request->data);
            if ($this->Admin->save($admin)) {
                $this->Flash->success('The admin has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The admin could not be saved. Please, try again.');
            }
        }
        $this->set(compact('admin'));
        $this->set('_serialize', ['admin']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $admin = $this->Admin->get($id);
        if ($this->Admin->delete($admin)) {
            $this->Flash->success('The admin has been deleted.');
        } else {
            $this->Flash->error('The admin could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
