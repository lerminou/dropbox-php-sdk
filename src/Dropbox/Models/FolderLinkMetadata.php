<?php
namespace Kunnu\Dropbox\Models;

class FolderLinkMetadata extends BaseModel
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
     * Create a new FileLinkMetadata instance
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
        $this->id = $this->getDataProperty('id');
        $this->name = $this->getDataProperty('name');
        $this->path_lower = $this->getDataProperty('path_lower');
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
     * Get the 'path_lower' property of the file model.
     *
     * @return string
     */
    public function getPathLower()
    {
        return $this->path_lower;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

}
