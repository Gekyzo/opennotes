<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Folder Entity
 *
 * @property int $id
 * @property string $name
 * @property int|null $parent_id
 * @property int $lft
 * @property int $rght
 *
 * @property \App\Model\Entity\Folder $parent_folder
 * @property \App\Model\Entity\Folder[] $child_folders
 * @property \App\Model\Entity\Note[] $notes
 * @property \App\Model\Entity\User[] $users
 */
class Folder extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'parent_id' => true,
        'lft' => true,
        'rght' => true,
        'parent_folder' => true,
        'child_folders' => true,
        'notes' => true,
        'users' => true,
    ];
}
