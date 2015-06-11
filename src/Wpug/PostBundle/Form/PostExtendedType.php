<?php
// @forms @role-based-form
namespace Wpug\PostBundle\Form;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostExtendedType extends AbstractType
{

    private $securityContext;

    public function __construct(TokenStorage $securityContext)
    {
        $this->securityContext = $securityContext;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Current logged user
        $user = $this->securityContext->getToken()->getUser();

        $builder->add('title');
        if (is_object($user) && $user->isSuperAdmin()) {
            $builder->add('body')
                    ->add('category')
                    ->add('private');
        }
                
    }
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Wpug\PostBundle\Entity\Post'
        ));
    }
    

    public function getName()
    {
        return 'post_extended_type';
    }
}