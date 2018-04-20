<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 */

namespace Controller;

use Model\Question;
use Model\QuestionManager;

/**
 * Class ItemController
 * @package Controller
 */
class QuestionController extends AbstractController
{

    /**
     * @return string
     */
    public function index()
    {
        $QuestionManager = new QuestionManager();
        $items = $QuestionManager->findAll();

        return $this->twig->render('Item/index.html.twig', ['items' => $items]);
    }

    /**
     * @return string
     */
    public function mentions_legales()
    {
        $QuestionManager = new QuestionManager();
        $items = $QuestionManager->findAll();

        return $this->twig->render('Item/mentions_legales.html.twig', ['items' => $items]);
    }

    /**
     * @return string
     */
    public function resultat()
    {
        $QuestionManager = new QuestionManager();
        $items = $QuestionManager->findAll();

        return $this->twig->render('Item/resultat.html.twig', ['items' => $items]);
    }

    /**
     * @return string
     */
    public function quizz()
    {
        $QuestionManager = new QuestionManager();
        $items = $QuestionManager->findAll();

        return $this->twig->render('Item/quizz.html.twig', ['items' => $items]);
    }

    /**
     * @return string
     */
    public function questions()
    {
        $QuestionManager = new QuestionManager();
        $Questions = $QuestionManager->findQuizz();
        return $this->twig->render('Item/questions.html.twig', ['Questions' => $Questions]);
    }

    /**
     * @return string
     */
    public function mail()
    {
        $QuestionManager = new QuestionManager();
        $items = $QuestionManager->findAll();

        return $this->twig->render('Item/mail.html.twig');
    }


}
