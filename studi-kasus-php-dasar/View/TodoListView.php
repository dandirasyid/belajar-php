<?php

namespace View {

    use Service\TodoListService;
    use Helper\InputHelper;

    class TodoListView {

        private TodoListService $todoListService;

        public function __construct(TodoListService $todoListService) {
            $this->todoListService = $todoListService;
        }

        function showTodoList(): void {
            while (true) {

                $this->todoListService->showTodoList();

                echo "Menu" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "X. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");
                if ($pilihan == 1) {
                    $this->addTodoList();
                } else if ($pilihan == 2) {
                    $this->removeTodoList();
                } else if ($pilihan == "X") {
                    // Kembali
                    break;
                } else {
                    echo "Pilihan tidak dapat dimengerti" . PHP_EOL;
                }
            }

            echo "Sampai Jumpa Lagi...";
        }

        function addTodoList(): void {
            echo "Menambah Todo List";
            $todo = InputHelper::input("Todo (X untuk batal) ");

            if ($todo == "X") {
                echo "Batal menambah todo" . PHP_EOL;
            } else {
                $this->todoListService->addTodoList($todo);
            }
        }

        function removeTodoList(): void {
            echo "Menghapus TODO ";

            $pilihan = InputHelper::input("Nomor (X untuk batalkan)");

            if ($pilihan == "X") {
                echo "Batal menghapus todo";
            } else {
                $this->todoListService->removeTodoList($pilihan);
            }
        }
    }
}
