<?php

namespace modules\rbac\models;

use Yii;
use yii\base\Model;
use modules\rbac\Module;

/**
 * Class Permission
 * @package modules\rbac\models
 *
 * @property-read array $itemsPermissions
 * @property-read array $permissionChildren
 * @property-read array|string[] $permissionsArray
 */
class Permission extends Model
{
    // разрешения
    const PERMISSION_MANAGER_MAINTENANCE = 'managerMaintenance';
    const PERMISSION_MANAGER_MAINTENANCE_DESCRIPTION = 'Access to Maintenance management';

    const PERMISSION_MAINTENANCE = 'maintenanceView';
    const PERMISSION_MAINTENANCE_DESCRIPTION = 'View a site in maintenance mode';

    const PERMISSION_VIEW_ADMIN_PAGE = 'viewAdminPage';
    const PERMISSION_VIEW_ADMIN_PAGE_DESCRIPTION = 'Access to the admin area';

    const PERMISSION_MANAGER_CONFIG = 'managerConfig';
    const PERMISSION_MANAGER_CONFIG_DESCRIPTION = 'Access to the config site';

    const PERMISSION_MANAGER_RBAC = 'managerRbac';
    const PERMISSION_MANAGER_RBAC_DESCRIPTION = 'Access to RBAC management';

    const PERMISSION_MANAGER_USERS = 'managerUsers';
    const PERMISSION_MANAGER_USERS_DESCRIPTION = 'Access to Users management';

    const PERMISSION_MANAGER_POST = 'managerPosts';
    const PERMISSION_MANAGER_POST_DESCRIPTION = 'Access to Posts management';

    const PERMISSION_MANAGER_COMMENTS = 'managerComments';
    const PERMISSION_MANAGER_COMMENTS_DESCRIPTION = 'Access to Comments management';

    // редактирование только своих постов
    const PERMISSION_UPDATE_OWN_POST = 'updateOwnPost';
    const PERMISSION_UPDATE_OWN_POST_DESCRIPTION = 'Editing your own post';

    const PERMISSION_MANAGER_MASTER_DOKTER = 'managerMasterDokter';
    const PERMISSION_MANAGER_MASTER_DOKTER_DESCRIPTION = 'Access to Master Dokter management';

    const PERMISSION_MANAGER_MASTER_PROVINSI = 'managerMasterProvinsi';
    const PERMISSION_MANAGER_MASTER_PROVINSI_DESCRIPTION = 'Access to Master Provinsi management';

    const PERMISSION_MANAGER_MASTER = 'managerMaster';
    const PERMISSION_MANAGER_MASTER_DESCRIPTION = 'Access to Master management';

    const PERMISSION_MANAGER_MASTER_KOTA = 'managerMasterKota';
    const PERMISSION_MANAGER_MASTER_KOTA_DESCRIPTION = 'Access to Master Kota management';

    const PERMISSION_MANAGER_MASTER_KECAMATAN = 'managerMasterKecamatan';
    const PERMISSION_MANAGER_MASTER_KECAMATAN_DESCRIPTION = 'Access to Master Kecamatan management';

    const PERMISSION_MANAGER_MASTER_KELURAHAN = 'managerMasterKelurahan';
    const PERMISSION_MANAGER_MASTER_KELURAHAN_DESCRIPTION = 'Access to Master Kelurahan management';

    const PERMISSION_MANAGER_MASTER_PENYAKIT = 'managerMasterPenyakit';
    const PERMISSION_MANAGER_MASTER_PENYAKIT_DESCRIPTION = 'Access to Master Penyakit management';

    const PERMISSION_MANAGER_MASTER_UNIT = 'managerMasterUnit';
    const PERMISSION_MANAGER_MASTER_UNIT_DESCRIPTION = 'Access to Master Unit management';

    const PERMISSION_MANAGER_MASTER_PABRIK = 'managerMasterPabrik';
    const PERMISSION_MANAGER_MASTER_PABRIK_DESCRIPTION = 'Access to Master Pabrik management';

    const PERMISSION_MANAGER_MASTER_SATUAN = 'managerMasterSatuan';
    const PERMISSION_MANAGER_MASTER_SATUAN_DESCRIPTION = 'Access to Master Satuan management';

    const PERMISSION_MANAGER_MASTER_SATUAN_BESAR = 'managerMasterSatuanBesar';
    const PERMISSION_MANAGER_MASTER_SATUAN_BESAR_DESCRIPTION = 'Access to Master Satuan Besar management';

    const PERMISSION_MANAGER_MASTER_OBAT = 'managerMasterObat';
    const PERMISSION_MANAGER_MASTER_OBAT_DESCRIPTION = 'Access to Master Obat management';

    const PERMISSION_MANAGER_PENDAFTARAN_PASIEN = 'managerPendaftaranPasien';
    const PERMISSION_MANAGER_PENDAFTARAN_PASIEN_DESCRIPTION = 'Access to Pendaftaran Pasien management';

    // сценарииmanager
    const SCENARIO_CREATE = 'create';
    const SCENARIO_UPDATE = 'update';

    public $name;
    public $description;
    public $isNewRecord = false;

    /** @var  array $permissions Установленные разрешения для роли */
    public $permissions;
    /** @var array $permissionItems Разрешения */
    public $permissionItems;

    /**
     * @return array
     */
    public function getPermissionsArray()
    {
        return [
            self::PERMISSION_MANAGER_MAINTENANCE => self::PERMISSION_MANAGER_MAINTENANCE_DESCRIPTION,
            self::PERMISSION_MAINTENANCE => self::PERMISSION_MAINTENANCE_DESCRIPTION,
            self::PERMISSION_VIEW_ADMIN_PAGE => self::PERMISSION_VIEW_ADMIN_PAGE_DESCRIPTION,
            self::PERMISSION_MANAGER_CONFIG => self::PERMISSION_MANAGER_CONFIG_DESCRIPTION,
            self::PERMISSION_MANAGER_RBAC => self::PERMISSION_MANAGER_RBAC_DESCRIPTION,
            self::PERMISSION_MANAGER_USERS => self::PERMISSION_MANAGER_USERS_DESCRIPTION,
            self::PERMISSION_MANAGER_POST => self::PERMISSION_MANAGER_POST_DESCRIPTION,
            self::PERMISSION_MANAGER_COMMENTS => self::PERMISSION_MANAGER_COMMENTS_DESCRIPTION,
            self::PERMISSION_UPDATE_OWN_POST => self::PERMISSION_UPDATE_OWN_POST_DESCRIPTION,
            self::PERMISSION_MANAGER_MASTER_DOKTER => self::PERMISSION_MANAGER_MASTER_PROVINSI_DESCRIPTION,
            self::PERMISSION_MANAGER_MASTER_PROVINSI => self::PERMISSION_MANAGER_MASTER_DOKTER_DESCRIPTION,
            self::PERMISSION_MANAGER_MASTER_KOTA => self::PERMISSION_MANAGER_MASTER_KOTA_DESCRIPTION,
            self::PERMISSION_MANAGER_MASTER_KECAMATAN => self::PERMISSION_MANAGER_MASTER_KECAMATAN_DESCRIPTION,
            self::PERMISSION_MANAGER_MASTER_KELURAHAN => self::PERMISSION_MANAGER_MASTER_KELURAHAN_DESCRIPTION,
            self::PERMISSION_MANAGER_MASTER_PENYAKIT => self::PERMISSION_MANAGER_MASTER_PENYAKIT_DESCRIPTION,
            self::PERMISSION_MANAGER_MASTER_UNIT => self::PERMISSION_MANAGER_MASTER_UNIT_DESCRIPTION,
            self::PERMISSION_MANAGER_PENDAFTARAN_PASIEN => self::PERMISSION_MANAGER_PENDAFTARAN_PASIEN_DESCRIPTION
        ];
    }

    /**
     * Groups permissions
     * @return array
     */
    public static function getGroups()
    {
        return [
            Role::ROLE_SUPER_ADMIN => self::groupSuperAdmin(),
            Role::ROLE_ADMIN => self::groupAdmin(),
            Role::ROLE_MANAGER => self::groupManager(),
            Role::ROLE_EDITOR => self::groupEditor()
        ];
    }

    /**
     * Group permissions to role super_admin
     * @return array
     */
    public static function groupSuperAdmin()
    {
        return [
            self::PERMISSION_MANAGER_MAINTENANCE,
            self::PERMISSION_MAINTENANCE,
            self::PERMISSION_VIEW_ADMIN_PAGE,
            self::PERMISSION_MANAGER_CONFIG,
            self::PERMISSION_MANAGER_POST,
            self::PERMISSION_MANAGER_COMMENTS,
            self::PERMISSION_MANAGER_USERS,
            self::PERMISSION_MANAGER_RBAC
        ];
    }

    /**
     * Group permissions to role admin
     * @return array
     */
    public static function groupAdmin()
    {
        return [
            self::PERMISSION_MANAGER_MAINTENANCE,
            self::PERMISSION_MAINTENANCE,
            self::PERMISSION_VIEW_ADMIN_PAGE,
            self::PERMISSION_MANAGER_POST,
            self::PERMISSION_MANAGER_COMMENTS,
            self::PERMISSION_MANAGER_USERS
        ];
    }

    /**
     * Group permissions to role manager
     * @return array
     */
    public static function groupManager()
    {
        return [
            self::PERMISSION_VIEW_ADMIN_PAGE,
            self::PERMISSION_MANAGER_POST
        ];
    }

    /**
     * Group permissions to role editor
     * @return array
     */
    public static function groupEditor()
    {
        return [
            self::PERMISSION_VIEW_ADMIN_PAGE,
            self::PERMISSION_UPDATE_OWN_POST
        ];
    }

    /**
     * @inheritdoc
     * @return array
     */
    public function rules()
    {
        return [
            ['name', 'required', 'on' => self::SCENARIO_CREATE],
            ['name', 'string', 'max' => 64, 'on' => self::SCENARIO_CREATE],
            [
                'name',
                'match',
                'pattern' => '#^[\w_-]+$#i',
                'message' => Module::translate(
                    'module',
                    'It is allowed to use the Latin alphabet, numbers, dashes and underscores.(A-z,0-1,-,_)'
                ),
                'on' => self::SCENARIO_CREATE
            ],
            [
                'name',
                'validateUniqueName',
                'skipOnEmpty' => false,
                'skipOnError' => false,
                'on' => [self::SCENARIO_CREATE
                ]
            ],

            [['description'], 'string'],
            [['permissionItems', 'permissions'], 'required', 'on' => self::SCENARIO_UPDATE]
        ];
    }

    /**
     * @param string $attribute
     */
    public function validateUniqueName($attribute)
    {
        if (!$attribute) {
            $this->addError($attribute, Module::translate('module', 'Enter name permission.'));
        }

        if (!$this->hasErrors()) {
            $this->processCheckPermissionName($attribute);
        }
    }

    /**
     * @param string $attribute
     * @return mixed
     */
    public function processCheckPermissionName($attribute)
    {
        if (!empty($this->name)) {
            $auth = Yii::$app->authManager;
            if ($auth->getPermission($this->name)) {
                $this->addError($attribute, Module::translate('module', 'This name is already taken.'));
            }
        }
        return $attribute;
    }

    /**
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_CREATE] = ['name', 'description'];
        $scenarios[self::SCENARIO_UPDATE] = ['name', 'description', 'permissionItems', 'permissions'];
        return $scenarios;
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'name' => Module::translate('module', 'Name'),
            'description' => Module::translate('module', 'Description'),
            'rolesByPermission' => Module::translate('module', 'Roles with permissions'),
            'itemsRoles' => Module::translate('module', 'Items roles'),
            'permissions' => Module::translate('module', 'Permissions by role'),
            'permissionItems' => Module::translate('module', 'Items permissions')
        ];
    }

    /**
     * Возвращает детей разрешения для текущего разрешения
     * @return array
     */
    public function getPermissionChildren()
    {
        $auth = Yii::$app->authManager;
        $perm = $auth->getChildren($this->name);
        $arr = [];
        foreach ($perm as $value) {
            if ($value->name !== $this->name) {
                $arr[$value->name] = $value->name . ' (' . $value->description . ')';
            }
        }
        return $arr;
    }

    /**
     * Возвращает все разрешения
     * @return array
     */
    public function getItemsPermissions()
    {
        $auth = Yii::$app->authManager;
        $perm = $auth->getPermissions();
        $arr = [];
        foreach ($perm as $value) {
            if ($value->name !== $this->name) {
                $arr[$value->name] = $value->name . ' (' . $value->description . ')';
            }
        }
        $permChild = $this->getPermissionChildren();
        return array_diff($arr, $permChild);
    }
}
