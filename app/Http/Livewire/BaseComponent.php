<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BaseComponent extends Component
{
    public $isModalOpen = false;
    public $isConfirmationOpen = false;

    public function openModalPopover()
    {
        $this->isModalOpen = true;
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    public function closeConfirmationModalPopover()
    {
        $this->isConfirmationOpen = false;
    }

    public function openConfirmationModalPopover()
    {
        $this->isConfirmationOpen = true;
    }

    public function resetCreateForm(array $fields = [])
    {
        empty($fields) ? $this->reset() : $this->reset($fields);
    }

    public function sendToastMessage($type, $message, $title = '')
    {
        $this->dispatchBrowserEvent('alert', [
            'type' => $type,
            'title' => $title,
            'message' => $message
        ]);
    }

}
