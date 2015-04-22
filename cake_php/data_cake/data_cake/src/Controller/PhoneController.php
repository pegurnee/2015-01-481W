<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Phone Controller
 *
 * @property \App\Model\Table\PhoneTable $Phone
 */
class PhoneController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('phone', $this->paginate($this->Phone));
        $this->set('_serialize', ['phone']);
    }

    /**
     * View method
     *
     * @param string|null $id Phone id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $phone = $this->Phone->get($id, [
            'contain' => []
        ]);
        $this->set('phone', $phone);
        $this->set('_serialize', ['phone']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $phone = $this->Phone->newEntity();
        if ($this->request->is('post')) {
            $phone = $this->Phone->patchEntity($phone, $this->request->data);
            if ($this->Phone->save($phone)) {
                $this->Flash->success('The phone has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The phone could not be saved. Please, try again.');
            }
        }
        $this->set(compact('phone'));
        $this->set('_serialize', ['phone']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Phone id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $phone = $this->Phone->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $phone = $this->Phone->patchEntity($phone, $this->request->data);
            if ($this->Phone->save($phone)) {
                $this->Flash->success('The phone has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The phone could not be saved. Please, try again.');
            }
        }
        $this->set(compact('phone'));
        $this->set('_serialize', ['phone']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Phone id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $phone = $this->Phone->get($id);
        if ($this->Phone->delete($phone)) {
            $this->Flash->success('The phone has been deleted.');
        } else {
            $this->Flash->error('The phone could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
