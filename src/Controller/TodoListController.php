<?php

namespace App\Controller;

use App\Entity\TodoList;
use App\Form\TodoListType;
use App\Repository\TodoListRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/todo/list')]
class TodoListController extends AbstractController
{
    #[Route('/', name: 'app_todo_list_index', methods: ['GET'])]
    public function index(TodoListRepository $todoListRepository): Response
    {
        return $this->render('todo_list/index.html.twig', [
            'todo_lists' => $todoListRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_todo_list_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TodoListRepository $todoListRepository): Response
    {
        $todoList = new TodoList();
        $form = $this->createForm(TodoListType::class, $todoList);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $todoListRepository->save($todoList, true);

            return $this->redirectToRoute('app_todo_list_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('todo_list/new.html.twig', [
            'todo_list' => $todoList,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_todo_list_show', methods: ['GET'])]
    public function show(TodoList $todoList): Response
    {
        return $this->render('todo_list/show.html.twig', [
            'todo_list' => $todoList,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_todo_list_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, TodoList $todoList, TodoListRepository $todoListRepository): Response
    {
        $form = $this->createForm(TodoListType::class, $todoList);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $todoListRepository->save($todoList, true);

            return $this->redirectToRoute('app_todo_list_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('todo_list/edit.html.twig', [
            'todo_list' => $todoList,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_todo_list_delete', methods: ['POST'])]
    public function delete(Request $request, TodoList $todoList, TodoListRepository $todoListRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$todoList->getId(), $request->request->get('_token'))) {
            $todoListRepository->remove($todoList, true);
        }

        return $this->redirectToRoute('app_todo_list_index', [], Response::HTTP_SEE_OTHER);
    }
}
