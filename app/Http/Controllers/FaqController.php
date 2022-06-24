<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::all();

        return view('admin.faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'question' => 'required'
        ]);

        $input = $request->all();

        Faq::create($input);

        return redirect()->route('faqs.index')
            ->with('success', 'Question created successfully.');
    }

    public function show(Faq $faqs)
    {
        return view('admin.faqs.index', compact('about'));
    }

    public function edit(Faq $faqs)
    {
        return view('admin.faqs.edit', compact('faqs'));
    }

    public function update(Request $request, Faq $faqs)
    {
        $request->validate([
            'category' => 'required',
        ]);

        $input = $request->all();

        $faqs->update($input);

        return redirect()->route('faqs.index')
            ->with('success', 'Question updated successfully.');
    }

    public function destroy(Faq $faqs)
    {
        $faqs->delete();
        return redirect()->route('faqs.index')
            ->with('success', 'Question deleted successfully');
    }
}
