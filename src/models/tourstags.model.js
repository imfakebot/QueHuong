import { DataTypes } from "sequelize";
import sequelize from "../config/database.config.js";

const ToursTags = sequelize.define('ToursTags', {
    tourID: {
        type: DataTypes.UUID,
        defaultValue: DataTypes.UUIDV4,
        primaryKey: true,
    },
    tagID: {
        type: DataTypes.UUID,
        allowNull: false,
        primaryKey: true,
    },
    
   
}, {
    tableName: 'ToursTags'
});

export default ToursTags;
