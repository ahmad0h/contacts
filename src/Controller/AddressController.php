<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Address Controller
 *
 * @property \App\Model\Table\AddressTable $addresss
 *
 * @method \App\Model\Entity\Addres[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AddressController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Person']
        ];
        $address = $this->paginate($this->Address);

        $this->set(compact('address'));
    }

    /**
     * View method
     *
     * @param string|null $id Addres id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $address = $this->Address->get($id, [
            'contain' => ['Person']
        ]);

        $this->set('address', $address);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add($personID=null)
    {
        $address = $this->Address->newEntity();
        if ($this->request->is('post')) {
            $address = $this->Address->patchEntity($address, $this->request->data);
			if(isset($personID))
				$address->set('person_id', $personID);
			$address->set('created_by', "admin");
			$address->set('created_on',date('Y-m-d')); 
            if ($this->Address->save($address)) {
                $this->Flash->success(__('The {0} has been saved.', 'Address'));
                return $this->redirect(['controller' => 'Person', 'action' => 'view', $personID,]);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Address'));
            }
        }
        $person = $this->Address->Person->find('list', ['limit' => 200]);
        $this->set(compact('address', 'person'));
        $this->set('_serialize', ['address']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Address id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $address = $this->Address->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $address = $this->Address->patchEntity($address, $this->request->data);
			$address->set('modified_by', "admin"); 
            if ($this->Address->save($address)) {
                $this->Flash->success(__('The {0} has been saved.', 'Address'));
                return $this->redirect(['controller' => 'Person', 'action' => 'view', $address->person_id,]);
            } else {
                $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Address'));
            }
        }
        $person = $this->Address->Person->find('list', ['limit' => 200]);
        $this->set(compact('address', 'person'));
        $this->set('_serialize', ['address']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Addres id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete','get']);
        $address = $this->Address->get($id);
        if ($this->Address->delete($address)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Address'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Address'));
        }
        return $this->redirect(['controller' => 'Person', 'action' => 'view', $_GET['personID']]);
    }
}
