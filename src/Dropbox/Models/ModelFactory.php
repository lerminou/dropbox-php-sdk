<?php
namespace Kunnu\Dropbox\Models;

class ModelFactory
{

    /**
     * Make a Model Factory
     *
     * @param  array  $data Model Data
     *
     * @return \Kunnu\Dropbox\Models\ModelInterface
     */
    public static function make(array $data = array())
    {
        //var_dump($data);
        if (isset($data['.tag']) && isset($data['url'])) {
            $tag = $data['.tag'];

            //FileLinkMetadata
            if ($tag === 'file') {
                return new FileLinkMetadata($data);
            }

            //FolderLinkMetadata
            if ($tag === 'folder') {
                return new FolderLinkMetadata($data);
            }
        }

        if (isset($data['.tag']) && isset($data['id'])) {
            $tag = $data['.tag'];

            //File
            if ($tag === 'file') {
                return new FileMetadata($data);
            }

            //Folder
            if ($tag === 'folder') {
                return new FolderMetadata($data);
            }
        }

        //Temporary Link
        if (isset($data['metadata']) && isset($data['link'])) {
            return new TemporaryLink($data);
        }

        //LinkList
        if (isset($data['links'])) {
            return new LinkCollection($data);
        }

        //List
        if (isset($data['entries'])) {
            return new MetadataCollection($data);
        }

        //Search Results
        if (isset($data['matches'])) {
            return new SearchResults($data);
        }

        //Deleted File/Folder
        if (!isset($data['.tag']) || !isset($data['id'])) {
            return new DeletedMetadata($data);
        }

        //Base Model
        return new BaseModel($data);
    }
}
