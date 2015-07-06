<?php

namespace cornernote\dashboard\panels;

use cornernote\dashboard\Panel;
use Yii;

/**
 * WelcomePanel
 * @package cornernote\dashboard\panels
 */
class WelcomePanel extends Panel
{

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $viewPath = '@cornernote/dashboard/views/dashboard/panels/welcome';

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function renderView()
    {
        return \Yii::$app->view->render($this->viewPath . '/view', [
            'panel' => $this,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function renderUpdate()
    {
        return \Yii::$app->view->render($this->viewPath . '/update', [
            'panel' => $this,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function renderForm($form)
    {
        return \Yii::$app->view->render($this->viewPath . '/form', [
            'panel' => $this,
            'form' => $form,
        ]);
    }

    /**
     * @inheritdoc
     */
    public function getOptions()
    {
        return json_encode([
            'message' => $this->message,
        ]);
    }

}