<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Appoinment Controller
 *
 * @property \App\Model\Table\AppoinmentTable $Appoinment
 */
class AppoinmentController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Patients', 'Doctors']
        ];
        $appoinment = $this->paginate($this->Appoinment);

        $this->set(compact('appoinment'));
        $this->set('_serialize', ['appoinment']);
    }

    /**
     * View method
     *
     * @param string|null $id Appoinment id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $appoinment = $this->Appoinment->get($id, [
            'contain' => ['Patients', 'Doctors']
        ]);

        $this->set('appoinment', $appoinment);
        $this->set('_serialize', ['appoinment']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $appoinment = $this->Appoinment->newEntity();
        if ($this->request->is('post')) {
            $appoinment = $this->Appoinment->patchEntity($appoinment, $this->request->data);
            if ($this->Appoinment->save($appoinment)) {
                $this->Flash->success(__('The appoinment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appoinment could not be saved. Please, try again.'));
        }
        $patients = $this->Appoinment->Patients->find('list', ['limit' => 200]);
        $doctors = $this->Appoinment->Doctors->find('list', ['limit' => 200]);
        $this->set(compact('appoinment', 'patients', 'doctors'));
        $this->set('_serialize', ['appoinment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Appoinment id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $appoinment = $this->Appoinment->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $appoinment = $this->Appoinment->patchEntity($appoinment, $this->request->data);
            if ($this->Appoinment->save($appoinment)) {
                $this->Flash->success(__('The appoinment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The appoinment could not be saved. Please, try again.'));
        }
        $patients = $this->Appoinment->Patients->find('list', ['limit' => 200]);
        $doctors = $this->Appoinment->Doctors->find('list', ['limit' => 200]);
        $this->set(compact('appoinment', 'patients', 'doctors'));
        $this->set('_serialize', ['appoinment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Appoinment id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $appoinment = $this->Appoinment->get($id);
        if ($this->Appoinment->delete($appoinment)) {
            $this->Flash->success(__('The appoinment has been deleted.'));
        } else {
            $this->Flash->error(__('The appoinment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
