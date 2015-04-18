<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Publisher Controller
 *
 * @property \App\Model\Table\PublisherTable $Publisher
 */
class PublisherController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('publisher', $this->paginate($this->Publisher));
        $this->set('_serialize', ['publisher']);
    }

    /**
     * View method
     *
     * @param string|null $id Publisher id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $publisher = $this->Publisher->get($id, [
            'contain' => ['Book']
        ]);
        $this->set('publisher', $publisher);
        $this->set('_serialize', ['publisher']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $publisher = $this->Publisher->newEntity();
        if ($this->request->is('post')) {
            $publisher = $this->Publisher->patchEntity($publisher, $this->request->data);
            if ($this->Publisher->save($publisher)) {
                $this->Flash->success('The publisher has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The publisher could not be saved. Please, try again.');
            }
        }
        $this->set(compact('publisher'));
        $this->set('_serialize', ['publisher']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Publisher id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $publisher = $this->Publisher->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $publisher = $this->Publisher->patchEntity($publisher, $this->request->data);
            if ($this->Publisher->save($publisher)) {
                $this->Flash->success('The publisher has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The publisher could not be saved. Please, try again.');
            }
        }
        $this->set(compact('publisher'));
        $this->set('_serialize', ['publisher']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Publisher id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $publisher = $this->Publisher->get($id);
        if ($this->Publisher->delete($publisher)) {
            $this->Flash->success('The publisher has been deleted.');
        } else {
            $this->Flash->error('The publisher could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
