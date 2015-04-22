<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CreditCard Controller
 *
 * @property \App\Model\Table\CreditCardTable $CreditCard
 */
class CreditCardController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('creditCard', $this->paginate($this->CreditCard));
        $this->set('_serialize', ['creditCard']);
    }

    /**
     * View method
     *
     * @param string|null $id Credit Card id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $creditCard = $this->CreditCard->get($id, [
            'contain' => ['Customer']
        ]);
        $this->set('creditCard', $creditCard);
        $this->set('_serialize', ['creditCard']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $creditCard = $this->CreditCard->newEntity();
        if ($this->request->is('post')) {
            $creditCard = $this->CreditCard->patchEntity($creditCard, $this->request->data);
            if ($this->CreditCard->save($creditCard)) {
                $this->Flash->success('The credit card has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The credit card could not be saved. Please, try again.');
            }
        }
        $customer = $this->CreditCard->Customer->find('list', ['limit' => 200]);
        $this->set(compact('creditCard', 'customer'));
        $this->set('_serialize', ['creditCard']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Credit Card id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $creditCard = $this->CreditCard->get($id, [
            'contain' => ['Customer']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $creditCard = $this->CreditCard->patchEntity($creditCard, $this->request->data);
            if ($this->CreditCard->save($creditCard)) {
                $this->Flash->success('The credit card has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The credit card could not be saved. Please, try again.');
            }
        }
        $customer = $this->CreditCard->Customer->find('list', ['limit' => 200]);
        $this->set(compact('creditCard', 'customer'));
        $this->set('_serialize', ['creditCard']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Credit Card id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $creditCard = $this->CreditCard->get($id);
        if ($this->CreditCard->delete($creditCard)) {
            $this->Flash->success('The credit card has been deleted.');
        } else {
            $this->Flash->error('The credit card could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
