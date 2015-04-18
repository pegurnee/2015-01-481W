<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * State Controller
 *
 * @property \App\Model\Table\StateTable $State
 */
class StateController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('state', $this->paginate($this->State));
        $this->set('_serialize', ['state']);
    }

    /**
     * View method
     *
     * @param string|null $id State id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $state = $this->State->get($id, [
            'contain' => []
        ]);
        $this->set('state', $state);
        $this->set('_serialize', ['state']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $state = $this->State->newEntity();
        if ($this->request->is('post')) {
            $state = $this->State->patchEntity($state, $this->request->data);
            if ($this->State->save($state)) {
                $this->Flash->success('The state has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The state could not be saved. Please, try again.');
            }
        }
        $this->set(compact('state'));
        $this->set('_serialize', ['state']);
    }

    /**
     * Edit method
     *
     * @param string|null $id State id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $state = $this->State->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $state = $this->State->patchEntity($state, $this->request->data);
            if ($this->State->save($state)) {
                $this->Flash->success('The state has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The state could not be saved. Please, try again.');
            }
        }
        $this->set(compact('state'));
        $this->set('_serialize', ['state']);
    }

    /**
     * Delete method
     *
     * @param string|null $id State id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $state = $this->State->get($id);
        if ($this->State->delete($state)) {
            $this->Flash->success('The state has been deleted.');
        } else {
            $this->Flash->error('The state could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
