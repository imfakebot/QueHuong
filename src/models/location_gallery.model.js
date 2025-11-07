import { DataTypes } from "sequelize";

export default function initLocationGalleryModel(sequelize) {
    const LocationGallery = sequelize.define('LocationGallery', {
    locationGalleryID: {
            type: DataTypes.UUID,
            defaultValue: DataTypes.UUIDV4,
            primaryKey: true,
        },
        locationID: {
            type: DataTypes.UUID,
            allowNull: false,
        },
        imageUrl: {
            type: DataTypes.STRING,
            allowNull: false,
        },
        caption:{
            type: DataTypes.STRING,
            allowNull: false,
        },
        displayOrder:{
            type: DataTypes.INTEGER,
            allowNull: false,
            unsigned: true,
            defaultValue: 0,
        }
    }, {
        tableName: 'location_galleries',
    });
    return LocationGallery;
}