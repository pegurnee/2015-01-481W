<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ShippingZone Controller
 *
 * @property \App\Model\Table\ShippingZoneTable $ShippingZone
 */
class ShippingZoneController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('shippingZone', $this->paginate($this->ShippingZone));
        $this->set('_serialize', ['shippingZone']);
    }

    /**
     * View method
     *
     * @param string|null $id Shipping Zone id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shippingZone = $this->ShippingZone->get($id, [
            'contain' => []
        ]);
        $this->set('shippingZone', $shippingZone);
        $this->set('_serialize', ['shippingZone']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shippingZone = $this->ShippingZone->newEntity();
        if ($this->request->is('post')) {
            $shippingZone = $this->ShippingZone->patchEntity($shippingZone, $this->request->data);
            if ($this->ShippingZone->save($shippingZone)) {
                $this->Flash->success('The shipping zone has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The shipping zone could not be saved. Please, try again.');
            }
        }
        $this->set(compact('shippingZone'));
        $this->set('_serialize', ['shippingZone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shipping Zone id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shippingZone = $this->ShippingZone->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shippingZone = $this->ShippingZone->patchEntity($shippingZone, $this->request->data);
            if ($this->ShippingZone->save($shippingZone)) {
                $this->Flash->success('The shipping zone has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The shipping zone could not be saved. Please, try again.');
            }
        }
        $this->set(compact('shippingZone'));
        $this->set('_serialize', ['shippingZone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shipping Zone id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shippingZone = $this->ShippingZone->get($id);
        if ($this->ShippingZone->delete($shippingZone)) {
            $this->Flash->success('The shipping zone has been deleted.');
        } else {
            $this->Flash->error('The shipping zone could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
