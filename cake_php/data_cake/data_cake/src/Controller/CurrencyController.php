<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Currency Controller
 *
 * @property \App\Model\Table\CurrencyTable $Currency
 */
class CurrencyController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('currency', $this->paginate($this->Currency));
        $this->set('_serialize', ['currency']);
    }

    /**
     * View method
     *
     * @param string|null $id Currency id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $currency = $this->Currency->get($id, [
            'contain' => []
        ]);
        $this->set('currency', $currency);
        $this->set('_serialize', ['currency']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $currency = $this->Currency->newEntity();
        if ($this->request->is('post')) {
            $currency = $this->Currency->patchEntity($currency, $this->request->data);
            if ($this->Currency->save($currency)) {
                $this->Flash->success('The currency has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The currency could not be saved. Please, try again.');
            }
        }
        $this->set(compact('currency'));
        $this->set('_serialize', ['currency']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Currency id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $currency = $this->Currency->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $currency = $this->Currency->patchEntity($currency, $this->request->data);
            if ($this->Currency->save($currency)) {
                $this->Flash->success('The currency has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The currency could not be saved. Please, try again.');
            }
        }
        $this->set(compact('currency'));
        $this->set('_serialize', ['currency']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Currency id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $currency = $this->Currency->get($id);
        if ($this->Currency->delete($currency)) {
            $this->Flash->success('The currency has been deleted.');
        } else {
            $this->Flash->error('The currency could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
