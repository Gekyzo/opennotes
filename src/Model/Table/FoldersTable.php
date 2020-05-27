<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Folders Model
 *
 * @property \App\Model\Table\FoldersTable&\Cake\ORM\Association\BelongsTo $ParentFolders
 * @property \App\Model\Table\FoldersTable&\Cake\ORM\Association\HasMany $ChildFolders
 * @property \App\Model\Table\NotesTable&\Cake\ORM\Association\BelongsToMany $Notes
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Folder newEmptyEntity()
 * @method \App\Model\Entity\Folder newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Folder[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Folder get($primaryKey, $options = [])
 * @method \App\Model\Entity\Folder findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Folder patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Folder[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Folder|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Folder saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Folder[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Folder[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Folder[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Folder[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TreeBehavior
 */
class FoldersTable extends AppTable
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('folders');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Tree');

        $this->belongsTo('ParentFolders', [
            'className' => 'Folders',
            'foreignKey' => 'parent_id',
        ]);
        $this->hasMany('ChildFolders', [
            'className' => 'Folders',
            'foreignKey' => 'parent_id',
        ]);
        $this->belongsToMany('Notes', [
            'foreignKey' => 'folder_id',
            'targetForeignKey' => 'note_id',
            'joinTable' => 'notes_folders',
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'folder_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'users_folders',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['name']));
        $rules->add($rules->existsIn(['parent_id'], 'ParentFolders'));

        return $rules;
    }

    /**
     * Devuelve los registros para generar el árbol de carpetas.
     *
     * @return \Cake\ORM\Query
     */
    public function listParents(): Query
    {
        $parentFolders = $this->ParentFolders->find('treeList', ['limit' => 200, 'spacer' => '└─ ']);

        return $parentFolders;
    }

    public function listParentsForUser($userId): Query
    {
        $parentFolders = $this->ParentFolders->find('treeList', ['limit' => 200, 'spacer' => '└─ '])->leftJoinWith('Users')->where(['user_id' => $userId]);

        return $parentFolders;
    }
}
