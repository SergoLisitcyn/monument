<?php
namespace frontend\controllers;

use common\widgets\costaRico\yii2Images\models\Image;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Спасибо за обращение.Мы скоро с вами свяжемся');
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка.Сообщение не отправлено');
            }

            return $this->refresh();
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Спасибо за обращение.Мы скоро с вами свяжемся');
            } else {
                Yii::$app->session->setFlash('error', 'Ошибка.Сообщение не отправлено');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionTypeStone()
    {
        $images = Image::find()->where(['itemId' => 1])->all();
        return $this->render('type-stone', [
            'images' => $images,
        ]);
    }

    public function actionGravirovka()
    {
        $images = Image::find()->where(['itemId' => 2])->all();
        return $this->render('gravirovka', [
            'images' => $images,
        ]);
    }

    public function actionGallery1()
    {
        $images = Image::find()->where(['itemId' => 3])->all();
        return $this->render('gallery', [
            'images' => $images,
        ]);
    }

    public function actionGallery($url)
    {
        if($url == 'gallery'){
            $itemId = 1;
            $title = 'Галерея';
        } elseif ($url == 'vertical'){
            $itemId = 2;
            $title = 'Вертикальные';
        } elseif ($url == 'gorizontal'){
            $itemId = 3;
            $title = 'Горизонтальные';
        } elseif ($url == 'vertical-figure'){
            $itemId = 4;
            $title = 'Вертикальные фигурные';
        } elseif ($url == 'dvoinoi'){
            $itemId = 5;
            $title = 'Двойной';
        } elseif ($url == 'sale'){
            $itemId = 6;
            $title = 'Недорогие памятники';
        } elseif ($url == 'other'){
            $itemId = 7;
            $title = 'Лавки,вазы,оградки';
        } else {
            return $this->redirect('index');
        }
        if(isset($itemId)){
            $images = Image::find()->where(['itemId' => $itemId])->all();
            return $this->render('gallery', [
                'images' => $images,
                'title' => $title,
            ]);
        } else {
            return $this->redirect('index');
        }
    }
}
