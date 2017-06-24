<?php
namespace Kunnu\Dropbox\Models;

class FileLinkMetadata extends BaseModel
{

    /**
     * A unique identifier of the file
     *
     * @var string
     */
    protected $id;

    /**
     * The last component of the path (including extension).
     *
     * @var string
     */
    protected $name;

    /**
     * A unique identifier for the current revision of a file.
     * This field is the same rev as elsewhere in the API and
     * can be used to detect changes and avoid conflicts.
     *
     * @var string
     */
    protected $rev;

    /**
     * The file size in bytes.
     *
     * @var int
     */
    protected $size;

    /**
     * The lowercased full path in the user's Dropbox.
     *
     * @var string
     */
    protected $path_lower;

    /**
     * The url full path of the shared file
     *
     * @var string
     */
    protected $url;


    /**
     * For files, this is the modification time set by the
     * desktop client when the file was added to Dropbox.
     *
     * @var DateTime
     */
    protected $client_modified;

    /**
     * The last time the file was modified on Dropbox.
     *
     * @var DateTime
     */
    protected $server_modified;



    /**
     * Create a new FileLinkMetadata instance
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
        $this->id = $this->getDataProperty('id');
        $this->rev = $this->getDataProperty('rev');
        $this->name = $this->getDataProperty('name');
        $this->size = $this->getDataProperty('size');
        $this->path_lower = $this->getDataProperty('path_lower');
        $this->client_modified = $this->getDataProperty('client_modified');
        $this->server_modified = $this->getDataProperty('server_modified');
        $this->url = $this->getDataProperty('url');

    }

    /**
     * Get the 'id' property of the file model.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the 'name' property of the file model.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the 'rev' property of the file model.
     *
     * @return string
     */
    public function getRev()
    {
        return $this->rev;
    }

    /**
     * Get the 'size' property of the file model.
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Get the 'path_lower' property of the file model.
     *
     * @return string
     */
    public function getPathLower()
    {
        return $this->path_lower;
    }


    /**
     * Get the 'client_modified' property of the file model.
     *
     * @return DateTime
     */
    public function getClientModified()
    {
        return $this->client_modified;
    }

    /**
     * Get the 'server_modified' property of the file model.
     *
     * @return DateTime
     */
    public function getServerModified()
    {
        return $this->server_modified;
    }


    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

}
