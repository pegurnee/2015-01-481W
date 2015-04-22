<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SeriesEntry Controller
 *
 * @property \App\Model\Table\SeriesEntryTable $SeriesEntry
 */
class SeriesEntryController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Series']
        ];
        $this->set('seriesEntry', $this->paginate($this->SeriesEntry));
        $this->set('_serialize', ['seriesEntry']);
    }

    /**
     * View method
     *
     * @param string|null $id Series Entry id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seriesEntry = $this->SeriesEntry->get($id, [
            'contain' => ['Series']
        ]);
        $this->set('seriesEntry', $seriesEntry);
        $this->set('_serialize', ['seriesEntry']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seriesEntry = $this->SeriesEntry->newEntity();
        if ($this->request->is('post')) {
            $seriesEntry = $this->SeriesEntry->patchEntity($seriesEntry, $this->request->data);
            if ($this->SeriesEntry->save($seriesEntry)) {
                $this->Flash->success('The series entry has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The series entry could not be saved. Please, try again.');
            }
        }
        $series = $this->SeriesEntry->Series->find('list', ['limit' => 200]);
        $this->set(compact('seriesEntry', 'series'));
        $this->set('_serialize', ['seriesEntry']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Series Entry id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seriesEntry = $this->SeriesEntry->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seriesEntry = $this->SeriesEntry->patchEntity($seriesEntry, $this->request->data);
            if ($this->SeriesEntry->save($seriesEntry)) {
                $this->Flash->success('The series entry has been saved.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('The series entry could not be saved. Please, try again.');
            }
        }
        $series = $this->SeriesEntry->Series->find('list', ['limit' => 200]);
        $this->set(compact('seriesEntry', 'series'));
        $this->set('_serialize', ['seriesEntry']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Series Entry id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seriesEntry = $this->SeriesEntry->get($id);
        if ($this->SeriesEntry->delete($seriesEntry)) {
            $this->Flash->success('The series entry has been deleted.');
        } else {
            $this->Flash->error('The series entry could not be deleted. Please, try again.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
