<?php

namespace KlapBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use KlapBundle\Entity\Employees;
use KlapBundle\Form\EmployeesType;

/**
 * Employees controller.
 *
 */
class EmployeesController extends Controller
{
    /**
     * Lists all Employees entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $employees = $em->getRepository('KlapBundle:Employees')->findAll();

        return $this->render('employees/index.html.twig', array(
            'employees' => $employees,
        ));
    }

    /**
     * Creates a new Employees entity.
     *
     */
    public function newAction(Request $request)
    {
        $employee = new Employees();
        $form = $this->createForm('KlapBundle\Form\EmployeesType', $employee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($employee);
            $em->flush();

            return $this->redirectToRoute('employees_show', array('id' => $employee->getId()));
        }

        return $this->render('employees/new.html.twig', array(
            'employee' => $employee,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Employees entity.
     *
     */
    public function showAction(Employees $employee)
    {
        $deleteForm = $this->createDeleteForm($employee);

        return $this->render('employees/show.html.twig', array(
            'employee' => $employee,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Employees entity.
     *
     */
    public function editAction(Request $request, Employees $employee)
    {
        $deleteForm = $this->createDeleteForm($employee);
        $editForm = $this->createForm('KlapBundle\Form\EmployeesType', $employee);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($employee);
            $em->flush();

            return $this->redirectToRoute('employees_edit', array('id' => $employee->getId()));
        }

        return $this->render('employees/edit.html.twig', array(
            'employee' => $employee,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Employees entity.
     *
     */
    public function deleteAction(Request $request, Employees $employee)
    {
        $form = $this->createDeleteForm($employee);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($employee);
            $em->flush();
        }

        return $this->redirectToRoute('employees_index');
    }

    /**
     * Creates a form to delete a Employees entity.
     *
     * @param Employees $employee The Employees entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Employees $employee)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('employees_delete', array('id' => $employee->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
