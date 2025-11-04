import { DataTypes } from "sequelize";
import sequelize from "../config/database.config.js"; // Import instance sequelize

const ToursSchedule = sequelize.define('ToursSchedule', {   
    toursScheduleID:{
        type: DataTypes.UUID,
        defaultValue: DataTypes.UUIDV4,
        primaryKey: true,
    },
    tourID: {
        type: DataTypes.UUID,
        allowNull: false,
    },
    startDate: {
        type: DataTypes.DATE,
        allowNull: false,
    },
    availableSlot:{
        type: DataTypes.INTEGER,
        allowNull: false,
        unsigned: true,
    }
    },{
        
        tableName: 'ToursSchedule'
        });
    
    export default ToursSchedule;

    
