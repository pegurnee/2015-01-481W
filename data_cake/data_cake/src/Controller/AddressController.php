<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Address Controller
 *
 * @property \App\Model\Table\AddressTable $Address
 */
class AddressController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('address', $this->paginate($this->Address));
        $this->set('_serialize', ['address']);
    }

    /**
     * View method
     *
     * @param string|null $id Addres id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $addres = $this->Address->get($id, [
            'contain' => ['Customer']
        ]);
        $this->set('addres', $addres);
        $this->set('_serialize', ['addres']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $addres = $this->Address->newEntity();
        if ($this->request->is('post')) {
            $addres = $this->Address->patchEntity($addres, $this->request->data);
            if ($this->Address->save($addres)) {
                $this->Flash->success('The addres has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The addres could not be saved. Please, try again.');
            }
        }
        $customer = $this->Address->Customer->find('list', ['limit' => 200]);
        $this->set(compact('addres', 'customer'));
        $this->set('_serialize', ['addres']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Addres id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $addres = $this->Address->get($id, [
            'contain' => ['Customer']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $addres = $this->Address->patchEntity($addres, $this->request->data);
            if ($this->Address->save($addres)) {
                $this->Flash->success('The addres has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The addres could not be saved. Please, try again.');
            }
        }
        $customer = $this->Address->Customer->find('list', ['limit' => 200]);
        $this->set(compact('addres', 'customer'));
        $this->set('_serialize', ['addres']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Addres id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $addres = $this->Address->get($id);
        if ($this->Address->delete($addres)) {
            $this->Flash->success('The addres has been deleted.');
        } else {
            $this->Flash->error('The addres could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
