<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\CommentsRepository")
 */
class Comments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var text
     *
     * @ORM\Column(name="Comments", type="text")
     */
    private $comments;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return text
     */
    public function getComments()
    {
        return $this->comments;
    }
    /**
     * @ORM\ManyToOne(targetEntity="Subject", inversedBy="comments", cascade={"remove"})
     * @ORM\JoinColumn(name="subject_id", referencedColumnName="id" , nullable=false)
     */
    private $Subject;

    public function setAdvert(Advert $advert)
    {
        $this->advert = $advert;

        return $this;
    }

    public function getAdvert()
    {
        return $this->advert;
    }

    /**
     * Set subject
     *
     * @param \Subject $subject
     */
    public function setSubject(\Subject $subject)
    {
        $this->subject = $subject;
    }

    /**
     * Get subject
     *
     * @return \Subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

}
