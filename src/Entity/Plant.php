<?php

namespace App\Entity;

use App\Repository\PlantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PlantRepository::class)
 */
class Plant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer",options={"unsigned": true})
     */
    private $plant_id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $plant_name;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $plant_type;

    /**
     * @ORM\Column(type="string", length=250, nullable=true)
     */
    private $plant_note;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $date_planting;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $plant_picture;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $plant_insolation;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $soil_humidity;

    /**
     * @ORM\Column(type="integer")
     */
    private $air_humidity;

    /**
     * @ORM\Column(type="integer")
     */
    private $plant_nutrient;

    /**
     * @ORM\Column(type="boolean")
     */
    private $plant_is_poison;

    public function getId(): ?int
    {
        return $this->plant_id;
    }

    public function getPlantId(): ?int
    {
        return $this->plant_id;
    }

    public function setPlantId(int $plant_id): self
    {
        $this->plant_id = $plant_id;

        return $this;
    }

    public function getPlantName(): ?string
    {
        return $this->plant_name;
    }

    public function setPlantName(string $plant_name): self
    {
        $this->plant_name = $plant_name;

        return $this;
    }

    public function getPlantType(): ?string
    {
        return $this->plant_type;
    }

    public function setPlantType(string $plant_type): self
    {
        $this->plant_type = $plant_type;

        return $this;
    }

    public function getPlantNote(): ?string
    {
        return $this->plant_note;
    }

    public function setPlantNote(?string $plant_note): self
    {
        $this->plant_note = $plant_note;

        return $this;
    }

    public function getDatePlanting(): ?string
    {
        return $this->date_planting;
    }

    public function setDatePlanting(string $date_planting): self
    {
        $this->date_planting = $date_planting;

        return $this;
    }

    public function getPlantPicture(): ?string
    {
        return $this->plant_picture;
    }

    public function setPlantPicture(?string $plant_picture): self
    {
        $this->plant_picture = $plant_picture;

        return $this;
    }

    public function getPlantInsolation(): ?int
    {
        return $this->plant_insolation;
    }

    public function setPlantInsolation(?int $plant_insolation): self
    {
        $this->plant_insolation = $plant_insolation;

        return $this;
    }

    public function getSoilHumidity(): ?string
    {
        return $this->soil_humidity;
    }

    public function setSoilHumidity(?string $soil_humidity): self
    {
        $this->soil_humidity = $soil_humidity;

        return $this;
    }

    public function getAirHumidity(): ?int
    {
        return $this->air_humidity;
    }

    public function setAirHumidity(int $air_humidity): self
    {
        $this->air_humidity = $air_humidity;

        return $this;
    }

    public function getPlantNutrient(): ?int
    {
        return $this->plant_nutrient;
    }

    public function setPlantNutrient(int $plant_nutrient): self
    {
        $this->plant_nutrient = $plant_nutrient;

        return $this;
    }

    public function getPlantIsPoison(): ?bool
    {
        return $this->plant_is_poison;
    }

    public function setPlantIsPoison(bool $plant_is_poison): self
    {
        $this->plant_is_poison = $plant_is_poison;

        return $this;
    }
}
