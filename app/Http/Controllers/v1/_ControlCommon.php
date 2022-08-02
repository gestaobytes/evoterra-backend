<?php

namespace App\Http\Controllers\v1;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Arr;
use App\Http\Controllers\v1\AuthController;

class _ControlCommon extends BaseController
{

    private $user, $authController;

    public function __construct(User $user, AuthController $authController)
    {
        $this->user = $user;
        $this->authController = $authController;
    }

    public function userAuthorization($gate)
    {
        $roleIrresctrict = 'super';
        if(!Auth::user()){
            abort(401, 'Usuario sem login ou sessao expirada.');
        }
        $idUserLogin = Auth::user()->id;
        $permissionsUser = $this->authController->permissionsUser();

        if ((!in_array($gate, $permissionsUser)) && (!in_array($roleIrresctrict, $permissionsUser))) {
            abort(403, 'Nao autorizado!');
        } else {
            return $idUserLogin;
        }
    }


    public function dateFilters()
    {
        $dts = isset($_GET['dts']) ? $_GET['dts'] . ' 00:00:01' : env('START_DATE') . ' 00:00:01';
        $dtf = isset($_GET['dtf']) ? $_GET['dtf'] . ' 23:59:59' : date('Y-m-d H:i:s');
        return [
            'dts' => $dts,
            'dtf' => $dtf
        ];
    }

    public function registersPerPage()
    {
        $pgLimit = isset($_GET['limit']) ? $_GET['limit'] : 10;
        return $pgLimit;
    }

    public function keywordsToSearch($fields)
    {
        $keywords = isset($_GET['q']) ? $_GET['q'] : '';

        $fields = explode(',', $fields);
        $qtdFields = count($fields);

        if (isset($keywords) && $keywords != '') {
            $keywords = explode(' ', $keywords);
            $qtd = count($keywords);
            $search = '';

            for ($i = 0; $i < $qtd; $i++) {
                for ($j = 0; $j < $qtdFields; $j++) {
                    $search .= "($fields[$j] like '%$keywords[$i]%') or ";
                }
            }
            $search = rtrim($search, ' or ');
        }

        return $search;
    }

    public function sortByField()
    {
        $sortField = isset($_GET['sort']) ? $_GET['sort'] : '-id';
        $sinal = substr($sortField, 0, 1);
        $orderBy = ($sinal == '-') ? substr($sortField, 1) . ' DESC' : $sortField . ' ASC';
        return $orderBy;
    }

    public function fieldsToSelect($fieldsPreSelected)
    {
        $fields = isset($_GET['fields']) ? $_GET['fields'] : $fieldsPreSelected;
        $fields = explode(',', $fields);
        return $fields;
    }
}
