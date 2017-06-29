<?php
/**
 * Class GithubApi.
 *
 * @category Service
 * @package  AppBundle
 * @author   Aleksandr Matvieiev <matyeyev.sasha@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 */

namespace AppBundle\Service;


use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Psr\Http\Message\ResponseInterface;

class GithubClient
{
    /**
     * Guzzle api client
     *
     * @var ClientInterface
     */
    private $client;

    /**
     * GithubClient constructor.
     *
     * @param string $baseUri Github base uri.
     */
    public function __construct($baseUri)
    {
        $this->client = new Client(['base_uri' => $baseUri]);
    }

    /**
     * Search repository.
     *
     * @param $queryString
     *
     * @return array
     */
    public function searchRepository($queryString): array
    {
        $response = $this->client->get(sprintf('search/repositories?q=%s&sort=stars&order=desc', $queryString));
        return $this->responseToArray($response);
    }

    /**
     * List issues for a repository.
     *
     * @param string $owner      Owner of the repository.
     * @param string $repository Repository name.
     * @param int    $page       Page number.
     *
     * @return array
     */
    public function listIssues($owner, $repository, $page): array
    {
        $response = $this->client->get(sprintf('repos/%s/%s/issues?page=%s', $owner, $repository, $page));
        return $this->responseToArray($response);
    }

    /**
     * Get single issue information by its repository owner, repository name and issue number.
     *
     * @param string     $repositoryOwner Repository owner.
     * @param string     $repositoryName  Repository name.
     * @param int|string $issueNumber     Issue number.
     *
     * @return array
     */
    public function findIssue($repositoryOwner, $repositoryName, $issueNumber): array
    {
        $response = $this->client->get(sprintf('repos/%s/%s/issues/%s', $repositoryOwner, $repositoryName, $issueNumber));
        return $this->responseToArray($response);
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
    public function findIssueComments($repositoryOwner, $repositoryName, $issueNumber): array
    {
        $response = $this->client->get(sprintf('repos/%s/%s/issues/%s/comments', $repositoryOwner, $repositoryName, $issueNumber));
        return $this->responseToArray($response);
    }

    /**
     * Read response.
     *
     * @param ResponseInterface $response Response instance.
     *
     * @return array
     */
    private function responseToArray($response): array
    {
        $result = [
            'body' => \json_decode($response->getBody()->read($response->getBody()->getSize()))
        ];

        if ($response->hasHeader('Link')) {
            $links = $response->getHeader('Link')[0];
            $result['links'] = explode(',', $links);
        }
        return $result;
    }
}