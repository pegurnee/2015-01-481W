<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Coupon Controller
 *
 * @property \App\Model\Table\CouponTable $Coupon
 */
class CouponController extends AppController
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
        $this->set('coupon', $this->paginate($this->Coupon));
        $this->set('_serialize', ['coupon']);
    }

    /**
     * View method
     *
     * @param string|null $id Coupon id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $coupon = $this->Coupon->get($id, [
            'contain' => ['SalesOrder']
        ]);
        $this->set('coupon', $coupon);
        $this->set('_serialize', ['coupon']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $coupon = $this->Coupon->newEntity();
        if ($this->request->is('post')) {
            $coupon = $this->Coupon->patchEntity($coupon, $this->request->data);
            if ($this->Coupon->save($coupon)) {
                $this->Flash->success('The coupon has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The coupon could not be saved. Please, try again.');
            }
        }
        $salesOrder = $this->Coupon->SalesOrder->find('list', ['limit' => 200]);
        $this->set(compact('coupon', 'salesOrder'));
        $this->set('_serialize', ['coupon']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Coupon id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $coupon = $this->Coupon->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $coupon = $this->Coupon->patchEntity($coupon, $this->request->data);
            if ($this->Coupon->save($coupon)) {
                $this->Flash->success('The coupon has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The coupon could not be saved. Please, try again.');
            }
        }
        $salesOrder = $this->Coupon->SalesOrder->find('list', ['limit' => 200]);
        $this->set(compact('coupon', 'salesOrder'));
        $this->set('_serialize', ['coupon']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Coupon id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $coupon = $this->Coupon->get($id);
        if ($this->Coupon->delete($coupon)) {
            $this->Flash->success('The coupon has been deleted.');
        } else {
            $this->Flash->error('The coupon could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
