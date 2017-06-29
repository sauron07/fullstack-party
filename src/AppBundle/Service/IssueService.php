<?php
/**
 * Class IssueService.
 *
 * @category Service
 * @package  AppBundle
 * @author   Aleksandr Matvieiev <matyeyev.sasha@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 */

namespace AppBundle\Service;


class IssueService
{
    /**
     * @var GithubClient
     */
    private $githubClient;

    public function __construct(GithubClient $githubClient)
    {
        $this->githubClient = $githubClient;
    }

    /**
     * Find issue for repository.
     *
     * @param string $repositoryOwner Repository owner name.
     * @param string $repositoryName  Repository name.
     * @param int    $page            Page number.
     *
     * @return array
     */
    public function foundAllIssues($repositoryOwner, $repositoryName, $page = 1): array
    {
        $response = $this->githubClient->listIssues($repositoryOwner, $repositoryName, $page);
        $response = $this->prepareResponseLinks($response);

        return $response;
    }

    /**
     * Find single issue by its number repository owner and repository name.
     *
     * @param string     $repositoryOwner Repository owner.
     * @param string     $repositoryName  Repository name.
     * @param int|string $issueNumber     Issue number.
     *
     * @return array
     */
    public function foundIssue($repositoryOwner, $repositoryName, $issueNumber): array
    {
        return $this->githubClient->findIssue($repositoryOwner, $repositoryName, $issueNumber);
    }

    /**
     * Find issue comments.
     *
     * @param string     $repositoryOwner Repository owner.
     * @param string     $repositoryName  Repository name.
     * @param int|string $issueNumber     Issue number.
     *
     * @return array
     */
    public function issueComment($repositoryOwner, $repositoryName, $issueNumber): array
    {
        return $this->githubClient->findIssueComments($repositoryOwner, $repositoryName, $issueNumber);
    }

    /**
     * Prepare links to suitable format.
     *
     * @param $response
     *
     * @return array
     */
    private function prepareResponseLinks($response): array
    {
        if (array_key_exists('links', $response)) {
            $response['links'] = array_reduce($response['links'], function ($result, $item) {
                preg_match('/rel="(.*?)"/', $item, $keys);
                preg_match('/page=(\d+)/', $item, $pageNumber);
                $result[end($keys)] = end($pageNumber);
                return $result;
            }, []);
        }

        return $response;
    }
}