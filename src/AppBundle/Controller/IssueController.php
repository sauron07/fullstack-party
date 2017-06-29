<?php
/**
 * Class IssueController.
 *
 * @category Controller
 * @package  AppBundle
 * @author   Aleksandr Matvieiev <matyeyev.sasha@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 */

namespace AppBundle\Controller;


use AppBundle\Service\IssueService;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class IssueController extends Controller
{
    /**
     * List of all founded issues for project.
     *
     * @Route(name="issue_list", path="{owner}/{repository}/issue/")
     *
     * @param Request $request    Symfony request instance.
     * @param string  $owner      Repository owner.
     * @param string  $repository Repository name.
     *
     * @return JsonResponse
     */
    public function listAction(Request $request, $owner, $repository): JsonResponse
    {
        /** @var IssueService $issueService */
        $issueService = $this->get(IssueService::class);

        $page = $request->get('page', 1);

        $issues = $issueService->foundAllIssues($owner, $repository, $page);

        return new JsonResponse($issues);
    }

    /**
     * Get issue information by its repository owner, repository name anf issue number.
     *
     * @Route(name="issue", path="{owner}/{repository}/issue/{issueNumber}")
     *
     * @param string     $owner       Repository owner.
     * @param string     $repository  Repository name.
     * @param int|string $issueNumber Issue number to get information for.
     *
     * @return JsonResponse
     */
    public function issueAction($owner, $repository, $issueNumber): JsonResponse
    {
        /** @var IssueService $issueService */
        $issueService = $this->get(IssueService::class);
        $issue = $issueService->foundIssue($owner, $repository, $issueNumber);
        return new JsonResponse($issue);
    }

    /**
     * Get issue comments.
     *
     * @Route(name="issue_comments", path="{owner}/{repository}/issue/{issueNumber}/comments")
     *
     * @param string     $owner       Repository owner.
     * @param string     $repository  Repository name.
     * @param int|string $issueNumber Issue number to get information for.
     *
     * @return JsonResponse
     */
    public function issueCommentsAction($owner, $repository, $issueNumber): JsonResponse
    {
        /** @var IssueService $issueService */
        $issueService = $this->get(IssueService::class);
        $comments = $issueService->issueComment($owner, $repository, $issueNumber);
        return new JsonResponse($comments);
    }
}