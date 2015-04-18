<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * OrderItem Controller
 *
 * @property \App\Model\Table\OrderItemTable $OrderItem
 */
class OrderItemController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['SalesOrder']
        ];
        $this->set('orderItem', $this->paginate($this->OrderItem));
        $this->set('_serialize', ['orderItem']);
    }

    /**
     * View method
     *
     * @param string|null $id Order Item id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderItem = $this->OrderItem->get($id, [
            'contain' => ['SalesOrder']
        ]);
        $this->set('orderItem', $orderItem);
        $this->set('_serialize', ['orderItem']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderItem = $this->OrderItem->newEntity();
        if ($this->request->is('post')) {
            $orderItem = $this->OrderItem->patchEntity($orderItem, $this->request->data);
            if ($this->OrderItem->save($orderItem)) {
                $this->Flash->success('The order item has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The order item could not be saved. Please, try again.');
            }
        }
        $salesOrder = $this->OrderItem->SalesOrder->find('list', ['limit' => 200]);
        $this->set(compact('orderItem', 'salesOrder'));
        $this->set('_serialize', ['orderItem']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order Item id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderItem = $this->OrderItem->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderItem = $this->OrderItem->patchEntity($orderItem, $this->request->data);
            if ($this->OrderItem->save($orderItem)) {
                $this->Flash->success('The order item has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The order item could not be saved. Please, try again.');
            }
        }
        $salesOrder = $this->OrderItem->SalesOrder->find('list', ['limit' => 200]);
        $this->set(compact('orderItem', 'salesOrder'));
        $this->set('_serialize', ['orderItem']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order Item id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderItem = $this->OrderItem->get($id);
        if ($this->OrderItem->delete($orderItem)) {
            $this->Flash->success('The order item has been deleted.');
        } else {
            $this->Flash->error('The order item could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
