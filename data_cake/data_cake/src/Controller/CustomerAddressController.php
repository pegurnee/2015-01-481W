<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomerAddress Controller
 *
 * @property \App\Model\Table\CustomerAddressTable $CustomerAddress
 */
class CustomerAddressController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Address', 'Customer']
        ];
        $this->set('customerAddress', $this->paginate($this->CustomerAddress));
        $this->set('_serialize', ['customerAddress']);
    }

    /**
     * View method
     *
     * @param string|null $id Customer Addres id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerAddres = $this->CustomerAddress->get($id, [
            'contain' => ['Address', 'Customer']
        ]);
        $this->set('customerAddres', $customerAddres);
        $this->set('_serialize', ['customerAddres']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerAddres = $this->CustomerAddress->newEntity();
        if ($this->request->is('post')) {
            $customerAddres = $this->CustomerAddress->patchEntity($customerAddres, $this->request->data);
            if ($this->CustomerAddress->save($customerAddres)) {
                $this->Flash->success('The customer addres has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The customer addres could not be saved. Please, try again.');
            }
        }
        $address = $this->CustomerAddress->Address->find('list', ['limit' => 200]);
        $customer = $this->CustomerAddress->Customer->find('list', ['limit' => 200]);
        $this->set(compact('customerAddres', 'address', 'customer'));
        $this->set('_serialize', ['customerAddres']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Addres id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerAddres = $this->CustomerAddress->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerAddres = $this->CustomerAddress->patchEntity($customerAddres, $this->request->data);
            if ($this->CustomerAddress->save($customerAddres)) {
                $this->Flash->success('The customer addres has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The customer addres could not be saved. Please, try again.');
            }
        }
        $address = $this->CustomerAddress->Address->find('list', ['limit' => 200]);
        $customer = $this->CustomerAddress->Customer->find('list', ['limit' => 200]);
        $this->set(compact('customerAddres', 'address', 'customer'));
        $this->set('_serialize', ['customerAddres']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Addres id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerAddres = $this->CustomerAddress->get($id);
        if ($this->CustomerAddress->delete($customerAddres)) {
            $this->Flash->success('The customer addres has been deleted.');
        } else {
            $this->Flash->error('The customer addres could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
