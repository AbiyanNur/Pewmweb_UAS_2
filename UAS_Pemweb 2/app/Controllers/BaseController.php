<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use App\Models\AboutModel;
use App\Models\BerandaModel;
use App\Models\StrukturModel;
use App\Models\AdminModel;
use App\Models\GaleriModel;
use App\Models\UserModel;
use App\Models\SettingModel;
use App\Models\KategoriModel;
use App\Models\LevelModel;

helper(['form']);

// $pager = \Config\Services::pager();
// $validation = \Config\Services::validation();
/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();
        // $session = \Config\Services::session();
        // $validation = \Config\Services::validation();
    }

    protected $BerandaModel;
    protected $AboutModel;
    protected $GaleriModel;
    protected $StrukturModel;
    protected $AdminModel;
    protected $UserModel;
    protected $SettingModel;
    protected $KategoriModel;
    protected $LevelModel;
    public function __construct()
    {
        $this->BerandaModel = new BerandaModel();
        $this->AboutModel = new AboutModel();
        $this->GaleriModel = new GaleriModel();
        $this->StrukturModel = new StrukturModel();
        $this->AdminModel = new AdminModel();
        $this->UserModel = new UserModel();
        $this->SettingModel = new SettingModel();
        $this->KategoriModel = new KategoriModel();
        $this->LevelModel = new LevelModel();
        helper('form');
    }
}
