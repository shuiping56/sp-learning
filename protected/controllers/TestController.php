<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class TestController extends Controller {

    private $_newProject;

    public function init() {
        parent::init();
        $this->_newProject = new Project();
    }

    public function ActionTestC() {
        //Create a new project 
        $newProject = new Project;
        $newProjectName = 'Test Project 1';
        $newProject->setAttributes(
                array(
                    'name' => $newProjectName,
                    'description' => 'Test project number one',
                    'create_time' => '2010-01-01 00:00:00',
                    'create_user_id' => 1,
                    'update_time' => '2010-01-01 00:00:00',
                    'update_user_id' => 1,
                )
        );
        $newProject->save(false);
    }

    public function ActionTestU() {
        $updatedProjectName = 'Updated Test Project 1';
        $this->_newProject->name = $updatedProjectName;
        $this->_newProject->save(false);
        
        $updatedProjectName = Project::model()->findAllByPk($this->_newProject->id);
        print_r( $updatedProjectName->name );
    }

}

?>
