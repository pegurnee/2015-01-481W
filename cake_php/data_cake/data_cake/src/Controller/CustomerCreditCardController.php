<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CustomerCreditCard Controller
 *
 * @property \App\Model\Table\CustomerCreditCardTable $CustomerCreditCard
 */
class CustomerCreditCardController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('customerCreditCard', $this->paginate($this->CustomerCreditCard));
        $this->set('_serialize', ['customerCreditCard']);
    }

    /**
     * View method
     *
     * @param string|null $id Customer Credit Card id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $customerCreditCard = $this->CustomerCreditCard->get($id, [
            'contain' => []
        ]);
        $this->set('customerCreditCard', $customerCreditCard);
        $this->set('_serialize', ['customerCreditCard']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $customerCreditCard = $this->CustomerCreditCard->newEntity();
        if ($this->request->is('post')) {
            $customerCreditCard = $this->CustomerCreditCard->patchEntity($customerCreditCard, $this->request->data);
            if ($this->CustomerCreditCard->save($customerCreditCard)) {
                $this->Flash->success('The customer credit card has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The customer credit card could not be saved. Please, try again.');
            }
        }
        $this->set(compact('customerCreditCard'));
        $this->set('_serialize', ['customerCreditCard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Customer Credit Card id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $customerCreditCard = $this->CustomerCreditCard->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $customerCreditCard = $this->CustomerCreditCard->patchEntity($customerCreditCard, $this->request->data);
            if ($this->CustomerCreditCard->save($customerCreditCard)) {
                $this->Flash->success('The customer credit card has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The customer credit card could not be saved. Please, try again.');
            }
        }
        $this->set(compact('customerCreditCard'));
        $this->set('_serialize', ['customerCreditCard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Customer Credit Card id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $customerCreditCard = $this->CustomerCreditCard->get($id);
        if ($this->CustomerCreditCard->delete($customerCreditCard)) {
            $this->Flash->success('The customer credit card has been deleted.');
        } else {
            $this->Flash->error('The customer credit card could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
