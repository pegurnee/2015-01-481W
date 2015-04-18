<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Customer Controller
 *
 * @property \App\Model\Table\CustomerTable $Customer
 */
class CustomerController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('customer', $this->paginate($this->Customer));
        $this->set('_serialize', ['customer']);
    }

    /**
     * View method
     *
     * @param string|null $id Customer id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customer = $this->Customer->get($id, [
            'contain' => ['Address', 'CreditCard']
        ]);
        $this->set('customer', $customer);
        $this->set('_serialize', ['customer']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customer = $this->Customer->newEntity();
        if ($this->request->is('post')) {
            $customer = $this->Customer->patchEntity($customer, $this->request->data);
            if ($this->Customer->save($customer)) {
                $this->Flash->success('The customer has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The customer could not be saved. Please, try again.');
            }
        }
        $address = $this->Customer->Address->find('list', ['limit' => 200]);
        $creditCard = $this->Customer->CreditCard->find('list', ['limit' => 200]);
        $this->set(compact('customer', 'address', 'creditCard'));
        $this->set('_serialize', ['customer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customer = $this->Customer->get($id, [
            'contain' => ['Address', 'CreditCard']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customer = $this->Customer->patchEntity($customer, $this->request->data);
            if ($this->Customer->save($customer)) {
                $this->Flash->success('The customer has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The customer could not be saved. Please, try again.');
            }
        }
        $address = $this->Customer->Address->find('list', ['limit' => 200]);
        $creditCard = $this->Customer->CreditCard->find('list', ['limit' => 200]);
        $this->set(compact('customer', 'address', 'creditCard'));
        $this->set('_serialize', ['customer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customer = $this->Customer->get($id);
        if ($this->Customer->delete($customer)) {
            $this->Flash->success('The customer has been deleted.');
        } else {
            $this->Flash->error('The customer could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
