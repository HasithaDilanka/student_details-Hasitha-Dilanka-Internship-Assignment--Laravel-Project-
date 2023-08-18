<?php

namespace domain\Service;

use App\Models\Student;

use infrastructure\Facades\ImagesFacade;

class StudentService
{

    protected $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function all()
    {
        return $this->student->all();
    }
    public function allActive()
    {
        return $this->student->allActive();
    }

    public function store($data)
    {
        if (isset($data['images'])) {
            $image = ImagesFacade::store($data['images'], [1, 2, 3, 4, 5]);
            $data['image_id'] = $image['created_images']->id;
        }
        $this->student->create($data);
    }

    public function delete($student_id)
    {
        $student = $this->student->find($student_id);
        $student->delete();
    }

    public function update(array $data, $student_id)
    {
        $student = $this->student->find($student_id);
        $student->update($this->model($student, $data));

    }

    protected function model(Student $student, $data)
    {
        return array_merge($student->toArray(), $data);
    }


    public function done($student_id)
    {
        $student = $this->student->find($student_id);
        $student->done = 1;
        $student->update();
    }

    public function get($student_id)
    {
        return $this->student->find($student_id);
    }


}