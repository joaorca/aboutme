<?php


namespace App\Service;

use App\Repository\AboutMeRepository;
use App\Repository\ContactRepository;
use App\Repository\CursoLivreRepository;
use App\Repository\EducationRepository;
use App\Repository\ExperienceRepository;
use App\Repository\HoobyRepository;
use App\Repository\LanguageRepository;
use App\Repository\SkillRepository;

class CurriculumService
{
    public function getCurriculum()
    {
        $aboutMe = ['aboutMe' => $this->getAboutMe()];
        $contact = ['contact' => $this->getContact()];
        $cursoLivre = ['cursoLivre' => $this->getCursoLivre()];
        $education = ['education' => $this->getEducation()];
        $experience = ['experience' => $this->getExperience()];
        $hobby = ['hobby' => $this->getHobby()];
        $language = ['language' => $this->getLanguage()];
        $skill = ['skill' => $this->getSkill()];

        return array_merge($aboutMe, $contact, $cursoLivre, $education, $experience, $hobby, $language, $skill);
    }

    private function getAboutMe()
    {
        return (new AboutMeRepository)->getData();
    }

    private function getContact()
    {
        return (new ContactRepository)->getData();
    }

    private function getCursoLivre()
    {
        return (new CursoLivreRepository())->getData();
    }

    private function getEducation()
    {
        return (new EducationRepository())->getData();
    }

    private function getExperience()
    {
        return (new ExperienceRepository())->getData();
    }

    private function getHobby()
    {
        return (new HoobyRepository())->getData();
    }

    private function getLanguage()
    {
        return (new LanguageRepository())->getData();
    }

    private function getSkill()
    {
        return (new SkillRepository())->getData();
    }
}
