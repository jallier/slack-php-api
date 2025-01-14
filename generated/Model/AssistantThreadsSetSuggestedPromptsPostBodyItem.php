<?php

declare(strict_types=1);

/*
 * This file is part of JoliCode's Slack PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Slack\Api\Model;

class AssistantThreadsSetSuggestedPromptsPostBodyItem
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * The title of the prompt.
     *
     * @var string|null
     */
    protected $title;
    /**
     * The content or message of the prompt.
     *
     * @var string|null
     */
    protected $message;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * The title of the prompt.
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * The title of the prompt.
     */
    public function setTitle(?string $title): self
    {
        $this->initialized['title'] = true;
        $this->title = $title;

        return $this;
    }

    /**
     * The content or message of the prompt.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * The content or message of the prompt.
     */
    public function setMessage(?string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;

        return $this;
    }
}
