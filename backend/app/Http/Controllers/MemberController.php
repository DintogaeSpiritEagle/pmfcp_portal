<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Laravel\Jetstream\RedirectsActions;

class MemberController extends Controller
{
    use RedirectsActions;

    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $teamId
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        // $team = Jetstream::newTeamModel()->findOrFail($teamId);

        // Gate::authorize('view', $team);

        // return Jetstream::inertia()->render($request, 'Teams/Show', [
        //     'team' => $team->load('owner', 'users', 'teamInvitations'),
        //     'availableRoles' => array_values(Jetstream::$roles),
        //     'availablePermissions' => Jetstream::$permissions,
        //     'defaultPermissions' => Jetstream::$defaultPermissions,
        //     'permissions' => [
        //         'canAddTeamMembers' => Gate::check('addTeamMember', $team),
        //         'canDeleteTeam' => Gate::check('delete', $team),
        //         'canRemoveTeamMembers' => Gate::check('removeTeamMember', $team),
        //         'canUpdateTeam' => Gate::check('update', $team),
        //     ],
        // ]);

        return Jetstream::inertia()->render($request, 'MembersList', [
            'test' => "Render NetworkMembersList here",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}
