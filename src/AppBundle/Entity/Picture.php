<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Picture
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var integer
     */
    protected $id;

   /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $pictureName;

    /**
     * @ORM\Column(type="integer")
     *
     * @var integer
     */
    private $pictureSize;

    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     * @Vich\UploadableField(mapping="pictures_upload", fileNameProperty="pictureName", size="pictureSize")
     * @var File
     */
    protected $pictureFile;

    /**
     * @ORM\Column(name="updatedAt", type="datetime")
     * @var \DateTime
     */
   private $updatedAt;



    // GETTERS & SETTERS
    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $pics
     */
    public function setPictureFile(?File $pics = null): void
    {
        $this->pictureFile = $pics;

        if (null !== $pics) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getPictureFile(): ?File
    {
        return $this->pictureFile;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
	{
		$this->id = $id;
    }

    public function setPictureName(?string $pictureName): void
    {
        $this->pictureName = $pictureName;
    }

    public function getPictureName(): ?string
    {
        return $this->pictureName;
    }

    public function setPictureSize(?int $pictureSize): void
    {
        $this->pictureSize = $pictureSize;
    }

    public function getPictureSize(): ?int
    {
        return $this->pictureSize;
    }

}
