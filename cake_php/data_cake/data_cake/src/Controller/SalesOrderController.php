<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SalesOrder Controller
 *
 * @property \App\Model\Table\SalesOrderTable $SalesOrder
 */
class SalesOrderController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Address']
        ];
        $this->set('salesOrder', $this->paginate($this->SalesOrder));
        $this->set('_serialize', ['salesOrder']);
    }

    /**
     * View method
     *
     * @param string|null $id Sales Order id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $salesOrder = $this->SalesOrder->get($id, [
            'contain' => ['Address']
        ]);
        $this->set('salesOrder', $salesOrder);
        $this->set('_serialize', ['salesOrder']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $salesOrder = $this->SalesOrder->newEntity();
        if ($this->request->is('post')) {
            $salesOrder = $this->SalesOrder->patchEntity($salesOrder, $this->request->data);
            if ($this->SalesOrder->save($salesOrder)) {
                $this->Flash->success('The sales order has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The sales order could not be saved. Please, try again.');
            }
        }
        $address = $this->SalesOrder->Address->find('list', ['limit' => 200]);
        $this->set(compact('salesOrder', 'address'));
        $this->set('_serialize', ['salesOrder']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sales Order id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $salesOrder = $this->SalesOrder->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $salesOrder = $this->SalesOrder->patchEntity($salesOrder, $this->request->data);
            if ($this->SalesOrder->save($salesOrder)) {
                $this->Flash->success('The sales order has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The sales order could not be saved. Please, try again.');
            }
        }
        $address = $this->SalesOrder->Address->find('list', ['limit' => 200]);
        $this->set(compact('salesOrder', 'address'));
        $this->set('_serialize', ['salesOrder']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sales Order id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $salesOrder = $this->SalesOrder->get($id);
        if ($this->SalesOrder->delete($salesOrder)) {
            $this->Flash->success('The sales order has been deleted.');
        } else {
            $this->Flash->error('The sales order could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
