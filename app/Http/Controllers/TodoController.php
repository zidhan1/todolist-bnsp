<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    // Halaman awal
    public function index()
    {
        $tasks = Todo::all();
        return view('todolist', compact('tasks'));
    }

    // Menyimpan task baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'status' => 'required|string|in:selesai,belum',
        ]);

        $task = Todo::create($request->only('title', 'status'));

        return redirect('/')->with('success', 'Task Berhasil Disimpan!');
    }

    // menyimpan task selesai
    public function taskSelesai($id)
    {
        $task = Todo::findOrFail($id);
        $task->status = 'selesai';
        $task->save();

        return redirect('/')->with('success', 'Task sudah selesai!');
    }

    // menyimpan task belum
    public function taskBelum($id)
    {
        $task = Todo::findOrFail($id);
        $task->status = 'belum';
        $task->save();

        return redirect('/')->with('success', 'Task belum selesai!');
    }

    // menghapus task
    public function destroy($id)
    {
        $task = Todo::findOrFail($id);
        $task->delete();

        return redirect('/')->with('success', 'Task Berhasil Dihapus!');
    }
}
